<?php declare(strict_types=1);

namespace SwagShopFinder\Core\Content\ShopFinder;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\Country\CountryEntity;

class ShopFinderEntity extends Entity
{
    use EntityIdTrait;

    /**
    * @var bool
    **/
    protected $active;

    /**
    * @var string
    **/
    protected $name;

    /**
    * @var string
    **/
    protected $street;

    /**
    * @var string
    **/
    protected $postCode;

    /**
    * @var string
    **/
    protected $city;

    /**
    * @var string|null
    **/
    protected $url;

    /**
    * @var string|null
    **/
    protected $telephone;

    /**
    * @var string|null
    **/
    protected $openTimes;

    /**
    * @var CountryEntity
    **/
    protected $country;



    // NOTE: GETTERS AND SETTERS

    /**
    * @return bool $active
    **/
    public function isActive(): bool
    {
      return $this->active;
    }

    /**
    * @param bool $active
    **/
    public function setActive(bool $active): void
    {
      $this->active = $active;
    }

    /**
    * @return string $name
    **/
    public function getName(): string
    {
      return $this->name;
    }

    /**
    * @param string $name
    **/
    public function setName(string $name): void
    {
      $this->name = $name;
    }

    /**
    * @return string
    **/
    public function getStreet(): string
    {
      return $this->street;
    }

    /**
    * @param string $street
    **/
    public function setStreet(string $street): void
    {
      $this->street = $street;
    }

    /**
    * @return string
    **/
    public function getPostCode(): string
    {
      return $this->postCode;
    }

    /**
    * @param string $postCode
    **/
    public function setPostCode(string $postCode): void
    {
      $this->postCode = $postCode;
    }

    /**
    * @return string
    **/
    public function getCity(): string
    {
      return $this->city;
    }

    /**
    * @param string $city
    **/
    public function setCity(string $city): void
    {
      $this->city = $city;
    }

    /**
    * @return string|null
    **/
    public function getUrl(): ?string
    {
      return $this->url;
    }

    /**
    * @param string $city
    **/
    public function setUrl(string $url): void
    {
      $this->url = $url;
    }

    /**
    * @return string|null
    **/
    public function getTelephone(): ?string
    {
      return $this->telephone;
    }

    /**
    * @param string $telephone
    **/
    public function setTelephone(string $telephone): void
    {
      $this->telephone = $telephone;
    }

    /**
    * @return string|null
    **/
    public function getOpenTimes(): ?string
    {
      return $this->openTimes;
    }

    /**
    * @param string $openTimes
    **/
    public function setOpenTimes(string $openTimes): void
    {
      $this->openTimes = $openTimes;
    }

    /**
    * @return CountryEntity
    **/
    public function getCountry(): ?CountryEntity
    {
      return $this->country;
    }

    /**
    * @param string $country
    **/
    public function setCountry(string $country): void
    {
      $this->country = $country;
    }
}
