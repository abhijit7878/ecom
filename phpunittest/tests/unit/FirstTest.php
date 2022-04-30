<?php

class paytest extends \ecom\Framework\TestCase{
    protected $pay;
    public function testAdminList(){

        $this->pay = new \ecom\admin\classes\admin;
        $this->pay->getAdminList(10,'abhijit','abhijit000@gmail.com');
        $this->assertEquals( $this->admin->getAdminList(), 10,'abhijit','abhijit000@gmail.com' );


    }


}
?>
