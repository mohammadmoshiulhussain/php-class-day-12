<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0 => [
                'name'    => 'Jahid',
                'email'   => 'jahid@gmail.com',
                'mobile'  => [
                    'mobile1' => '01712812980',
                    'mobile2' => '01712812980'
                ],
            ],
            1 => [
                'name'    => 'Fahim',
                'email'   => 'fahim@gmail.com',
                'mobile'  => [
                    'mobile1' => '01712812980',
                    'mobile2' => '01712812980'
                ],
            ],
            2 => 'BITM',
            3 => [
                    'name'    => 'moshiul',
                    'email'   => 'moshiul@gmail.com',
                    'mobile'  => [
                        'mobile1' => '01712812980',
                        'mobile2' => '01712812980'
                    ],
            ],
        ];

//        echo '<pre>';
//        print_r($this->student);
//        var_dump($this->student);

        $_

















//        foreach ($this->student as $key => $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else {echo $value;}
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>';
//        }








//        foreach ($this->student as $key => $item)
//        {
//            if ($key ==0)
//            {
//                echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//                break;
//            }
//        }



//        $this->student = [10, 20, 'BITM', 10.20, true, false];
////        echo $this->student[5];
//
//        foreach ($this->student as $role=> $student)
//        {
//            echo 'index no - '. $role. ' value - ' . $student.'<br/>';
//        }
    }
}