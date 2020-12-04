<?php
namespace PHPMVC\Models;

class CompanyModel extends AbstractModel
{
    public $CompanyId;
    public $NameCompany;
    public $UserId;
    public $Address1;
    public $Address2;
    public $Address3;
    public $PhoneNumber1;
    public $PhoneNumber2;
    public $PhoneNumber3;
    public $Email1;
    public $Email2;
    public $Email3;
    public $SEGEL;
    public $VatNo;
    public $Image;
    public $Facebook;
    public $Twitter;
    public $Instgram;
    public $snap;
    public $Barcode;
    public $CreatedBy;

    /**
     * @var UserProfileModel
     */
    public $profile;
    public $privileges;

    protected static $tableName = 'app_company_list';

    protected static $tableSchema = array(
        'CompanyId'            => self::DATA_TYPE_INT,
        'NameCompany'          => self::DATA_TYPE_STR,
        'UserId'        => self::DATA_TYPE_INT,
        'Address1'          => self::DATA_TYPE_STR,
        'Email1'             => self::DATA_TYPE_STR,
        'PhoneNumber1'       => self::DATA_TYPE_STR,

    );

    protected static $primaryKey = 'CompanyId';
//
//    public function cryptPassword($password)
//    {
//        $this->Password = crypt($password, APP_SALT);
//    }

//
//    // TODO:: FIX THE TABLE ALIASING
//    public static function getUsers(UserModel $user)
//    {
//        return self::get(
//        'SELECT au.*, aug.GroupName GroupName FROM ' . self::$tableName . ' au INNER JOIN app_users_groups aug ON aug.GroupId = au.GroupId WHERE au.UserId != ' . $user->UserId
//        );
//    }
//
//    public static function userExists($username)
//    {
//        return self::get('
//            SELECT * FROM ' . self::$tableName . ' WHERE Username = "' . $username . '"
//        ');
//    }
//
    public static function authenticate ($username, $password, $session)
    {
        // $password = crypt($password, APP_SALT) ;
        $sql = 'SELECT *, (SELECT GroupName FROM app_users_groups WHERE app_users_groups.GroupId = ' . self::$tableName . '.GroupId) GroupName FROM ' . self::$tableName . ' WHERE Username = "' . $username . '" AND Password = "' .  $password . '"';
        $foundUser = self::getOne($sql);
        if(false !== $foundUser) {
            if($foundUser->Status ==2) {
        return 2;
            }
            $foundUser->LastLogin = date('Y-m-d H:i:s');
            $foundUser->save();
            $foundUser->profile = UserProfileModel::getByPK($foundUser->UserId);
            $foundUser->privileges = UserGroupPrivilegeModel::getPrivilegesForGroup($foundUser->GroupId);
            $session->u = $foundUser;
            return 1;
        }
        return false;
    }
}