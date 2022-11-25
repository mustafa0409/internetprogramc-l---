sınıf  Kişi
{
    genel  işlev  __construct ()
    {
        echo " Yapıcı metot çalıştı. ";
    }

    genel  son  işlev  getPersonName ( string  $ name )
    {
        yankı  $ isim . " Günaydın!! ";
    }
}
$ yeniİsim = yeni  Kişi ();
$ newName -> getPersonName (" Furkan ");
yankı " <br> ";
sınıf  Personel ,  Kişiyi uzatır 
{
    genel  işlev  getStaffName ( string  $ staffName )
    {
         ebeveyne dönüş :: getPersonName ( $ staffName );
    }
}
$ yeni Personel = yeni  Personel ();
$ newStaff -> getStaffName (" Barış ");
son  sınıf  Müşteri  Kişiyi uzatır 
{
    
}

son  sınıf  Şirket ,  Müşteriyi uzatır  {
    /* Final Class inherit olamaz. */
}
