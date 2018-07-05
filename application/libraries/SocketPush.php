<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require __DIR__ . '/../../vendor/autoload.php';

use Akeneo\Component\SpreadsheetParser\SpreadsheetParser;

class SocketPush
{

    public $values = [];
    
    public function haloo()
    {
        echo "MyMethod";
    }

    function publish($param)
    {
        $context = new ZMQContext();
        $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
        $socket->connect("tcp://localhost:5555");

        $socket->send(json_encode($param));
    }

    public function importExcel()
    {
        ini_set('memory_limit', '128M');
        
        $workbook = SpreadsheetParser::open(__DIR__.'/../../public/documen/employees-10000.xlsx');

        $myWorksheetIndex = $workbook->getWorksheetIndex('employees');

        foreach ($workbook->createRowIterator($myWorksheetIndex) as $rowIndex => $values) {
            array_push($this->values, $values);
        }
//        $param = [
//              'category' => 'kittensCategory',
//              'title' =>  count($this->getValues($values)) 
//            ];
//        $this->publish($param);
        $this->startProsesImport();
    }
    
    public function getValues()
    {
        return $this->values;
    }

    public function startProsesImport()
    {
        $totalRecord = count($this->getValues());
        $category = 'kittensCategory';
        $dataPublish = [
            "totalrecord" => $totalRecord-1,
            "category" => $category,
            "current_record" => [
                "no" => 0,
                "nama" => '',
                "nip" => '',
                "tanggal_rekrut" => null
            ],
            "current_progress" => 0
        ];
        
        foreach ($this->getValues() as $key => $value) {
            $dataPublish['current_record']["no"] = $key;
            $dataPublish['current_record']["nama"] = $value[2].' '.$value[3];
            $dataPublish['current_record']["nip"] = $value[0];
            $dataPublish['current_record']["tanggal_rekrut"] = $value[5];
            $dataPublish['current_progress'] = ($key/($totalRecord-1)) * 100 ."%";
            $this->publish($dataPublish);
            usleep(100);
        }
        print_r(json_encode($dataPublish));
    }
}
