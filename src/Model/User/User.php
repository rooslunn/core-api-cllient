<?php


namespace Pilulka\CoreApiClient\Model\User;

class User
{
    /** @var  int|null */
    private $id;
    /** @var  string */
    private $email;
    /** @var  int */
    private $role;
    /** @var  string */
    private $password;
    /** @var  string */
    private $firstName;
    /** @var  string */
    private $lastName;
    /** @var  string|null */
    private $phone;
    /** @var  string|null */
    private $company;
    /** @var  string|null */
    private $ico;
    /** @var  string|null */
    private $dic;
    /** @var  string|null */
    private $address;
    /** @var  string|null */
    private $city;
    /** @var  string|null */
    private $zip;
    /** @var  string|null */
    private $dFirstName;
    /** @var  string|null */
    private $dLastName;
    /** @var  string|null */
    private $dCompany;
    /** @var  string|null */
    private $dAddress;
    /** @var  string|null */
    private $dCity;
    /** @var  string|null */
    private $dZip;
    /** @var  bool */
    private $isActive;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role
     * @return User
     */
    public function setRole(int $role): User
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param null|string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param null|string $company
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * @param null|string $ico
     * @return User
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDic()
    {
        return $this->dic;
    }

    /**
     * @param null|string $dic
     * @return User
     */
    public function setDic($dic)
    {
        $this->dic = $dic;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param null|string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param null|string $zip
     * @return User
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return User
     */
    public function setIsActive(bool $isActive): User
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDFirstName()
    {
        return $this->dFirstName;
    }

    /**
     * @param null|string $dFirstName
     * @return User
     */
    public function setDFirstName($dFirstName)
    {
        $this->dFirstName = $dFirstName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDLastName()
    {
        return $this->dLastName;
    }

    /**
     * @param null|string $dLastName
     * @return User
     */
    public function setDLastName($dLastName)
    {
        $this->dLastName = $dLastName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDCompany()
    {
        return $this->dCompany;
    }

    /**
     * @param null|string $dCompany
     * @return User
     */
    public function setDCompany($dCompany)
    {
        $this->dCompany = $dCompany;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDAddress()
    {
        return $this->dAddress;
    }

    /**
     * @param null|string $dAddress
     * @return User
     */
    public function setDAddress($dAddress)
    {
        $this->dAddress = $dAddress;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDCity()
    {
        return $this->dCity;
    }

    /**
     * @param null|string $dCity
     * @return User
     */
    public function setDCity($dCity)
    {
        $this->dCity = $dCity;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDZip()
    {
        return $this->dZip;
    }

    /**
     * @param null|string $dZip
     * @return User
     */
    public function setDZip($dZip)
    {
        $this->dZip = $dZip;
        return $this;
    }

}
