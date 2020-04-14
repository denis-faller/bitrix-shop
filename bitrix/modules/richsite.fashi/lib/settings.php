<?
namespace Richsite\Fashi;

class Settings{

    private $propertySaleLeader;
    private $dealWeekElementID;
    private $bannerInTopCarousel;
    private $bannerInBottomCarousel;
    private $adminID;
    
    function __construct (){
        $this->propertySaleLeader = 2;
        $this->dealWeekElementID = 324;
        $this->bannerInTopCarousel = 323;
        $this->bannerInBottomCarousel = 325;
        $this->adminID = 1;
    }

    public function getPropertySaleLeader(){
        return $this->propertySaleLeader;
    }
    public function getDealWeekElementID(){
        return $this->dealWeekElementID;
    }
    public function getBannerInTopCarousel(){
        return $this->bannerInTopCarousel;
    }
    public function getBannerInBottomCarousel(){
        return $this->bannerInBottomCarousel;
    }
    public function getAdminID(){
        return $this->adminID;
    }
}

?>