sınıf  araba
{
    özel  $ yıl , $ marka , $ renk ;

    genel  işlev  __construct ( string  $ marka , string  $ renk , int  $ yıl )
    {
        $ this -> yil = $ yil ;
        $ this -> marka = $ marka ;
        $ this -> renk = $ renk ;
    }

    public  function  renkDegistir ( string  $ girilenrenk )
    {
        $ bu -> renk = $ girilenrenk ;
    }

    genel  işlev  modeliGoster ()
    {
         $ this - > yil ;
    }
}

$ nesne = yeni  Araba (" bmw ", " kırmızı ", " 2020 ");
$ nesne -> renkDegistir (" beyaz ");
yankı  $ nesne -> modelGoster ();
