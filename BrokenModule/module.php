<?
class TestTest extends IPSModule {
    
    public function Create(){
        //Never delete this line!
        parent::Create();
    }

    public function Destroy(){
        //Never delete this line!
        parent::Destroy();
        
    }

    public function ApplyChanges(){
        //Never delete this line!
        parent::ApplyChanges();
    }
    
    public function DoSomething() {
        if (5 < 3) {
            echo 'Test';
        }
    }
}

?>
