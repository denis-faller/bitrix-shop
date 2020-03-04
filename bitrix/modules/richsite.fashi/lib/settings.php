<?
namespace Richsite\Fashi;

class Settings{

    private $propertySaleLeader;
    
    
    function __construct (){
        $this->propertySaleLeader = 2;
    }

    public function getPropertySaleLeader(){
        return $this->propertySaleLeader;
    }

}

?>