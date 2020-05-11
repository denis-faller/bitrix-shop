<?
namespace Richsite\Fashi;

class Settings{

    private $propertySaleLeader;
    private $dealWeekElementID;
    private $bannerInTopCarousel;
    private $bannerInBottomCarousel;
    private $adminID;
    private $propertyBrandID;
    private $propertyColorID;
    private $propertySizeID;
    
    function __construct (){
        $this->propertySaleLeader = 2;
        $this->dealWeekElementID = 324;
        $this->bannerInTopCarousel = 323;
        $this->bannerInBottomCarousel = 325;
        $this->adminID = 1;
        $this->propertyBrandID = 5;
        $this->propertyColorID = 21;
        $this->propertySizeID = 23;
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
    public function getPropertyBrandID(){
        return $this->propertyBrandID;
    }
    public function getPropertyColorID(){
        return $this->propertyColorID;
    }
    public function getPropertySizeID(){
        return $this->propertySizeID;
    }
}

?>