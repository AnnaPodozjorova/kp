CREATE DATABASE IF NOT EXISTS kunstipood DEFAULT CHARACTER SET utf8;
USE kunstipood;

--test124
INSERT INTO user VALUES 
(1,'Ivan', 'Orav', '+37212345678', 'kajaoja 2', 'ivan.orav@gmail.com', 'parool'),
(2,'Mari', 'Mets', '+37211111111', 'metsa tee 6', 'mmets@gmail.com', 'parool1'),
(3,'Mart', 'Mets', '+37212121212', 'metsa tee 6', 'martmets@mail.ee', 'parool');

INSERT INTO _card_type VALUES 
(1,'silver', 5),
(2,'gold', 10),
(3,'platinum', 15);

INSERT INTO card VALUES 
(1, '2019-1-02 05:23:08','2020-1-02 01:00:15',  1, 1),
(2, '2019-1-08 05:23:08','2020-1-08 04:33:33',2, 2),
(3, '2019-1-08 05:23:08','2020-1-08 05:23:08',3, 3);

INSERT INTO _category VALUES 
(1, 'Hobitarbed'),
(2, 'Kunstitarbed'),
(3, 'Koolitarbed'),
(4, 'Pabertarbed'),
(5, 'Kirjutusvahendud');

INSERT INTO _sub_category VALUES 
(1, 1,'pliiatsid'),
(2, 2,'akvarellvärvid'),
(3, 2,'akrüülvärvid');

INSERT INTO subject VALUES 
(1, 3,'AKRÜÜLKOMPLEKT "SIMPLY" 12X12ML DALER-ROWNEY', 'Need varvid on voimalik kasutada otse tuubist ning nad sobivad kogu kunstipindadele nagu paber, papp ja lõuend.', 
    'COVER' , 10, 7.8),
(2, 2,'AKVARELLI KOMPLEKT "SIMPLY"12X12 ML DALER-ROWNEY', 'Komplekt "Simply" sisaldab 12 pastasuguseid akvarellvärve tuubis mahuga 12 ml.', 
    'COVER', 5, 6.5),
(3, 2,'AKVARELLI KOMPLEKT "SONET" 12X10ML, ST.-PETERBURG', 'Akvarellvärvid seeriast "Sonett" on mõeldud maalimiseks, omavad intensiivset ja puhast värvigammat.', 
    'COVER', 0, 11),
(4, 3,'AKRÜÜLKOMPLEKT "SIMPLY" 24X12ML DALER-ROWNEY', 'Need värvid on võimalik kasutada otse tuubist ning nad sobivad kogu kunstipindadele nagu paber, papp ja lõuend.', 
    'COVER', 9, 14.7);

INSERT INTO _comments VALUES 
(1, 1, 3,'v2ga hea v2rv', '2019-1-02 01:00:15'),
(2, 2, 1,'mingi tekst jdlkldkfjgaldkfg;lfdkag;fldkgdfg.', '2019-1-04 01:00:15'),
(3, 2, 3,'jah', '2019-1-04 04:04:45');

INSERT INTO _order VALUES 
(1, '2019-1-01 07:07:07', 'kajaoja 2', 0),
(2, '2019-1-02 06:06:44', 'metsa tee 6', 0),
(3, '2019-1-02 06:06:44', 'metsa tee 6', 0);

INSERT INTO bill VALUES 
(1, 1, '2019-1-01 07:07:07', 0, 1),
(2, 3, '2019-1-02 06:06:44', 1, 2),
(3, 3, '2019-1-02 06:06:44', 1, 3);

INSERT INTO _cart VALUES
(1, 3, 2, 22, 2, '2018-12-28 02:22:07', '2018-12-29 02:22:07'),
(2, 3, 1, 11, 3, '2019-1-01 07:07:07', '2019-01-01 02:22:07'),
(3, 1, 2, 15.6, 1, '2018-12-28 02:28:01', '2018-12-29 02:22:07');