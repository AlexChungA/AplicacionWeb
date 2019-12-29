create domain Logico varchar(3) check(value in('yes','no','Yes','No','YES','NO'));

CREATE TABLE public.escuelas
(
	school_id serial primary key,
    y2020_school_centre character varying(50) COLLATE pg_catalog."default",
    offer_hcl Logico COLLATE pg_catalog."default",
    hcl_designated_centre Logico COLLATE pg_catalog."default",
    offer_hml Logico COLLATE pg_catalog."default",
    hml_designated_centre Logico COLLATE pg_catalog."default",
    offer_htl Logico COLLATE pg_catalog."default",
    htl_designated_centre Logico COLLATE pg_catalog."default"
)

INSERT INTO public.escuelas(y2020_school_centre,offer_hcl,hcl_designated_centre,offer_hml,hml_designated_centre,offer_htl,htl_designated_centre) VALUES ('Admiralty Sec Sch','Yes','No','Yes','No','No','No'),
('Ahmad Ibrahim Sec Sch','Yes','No','No','No','No','No'),
('Anderson Sec Sch','Yes','No','Yes','Yes','Yes','No'),
('Anglican High Sch','Yes','No','No','No','No','No'),
('Ang Mo Kio Sec Sch','Yes','Yes','No','No','No','No'),
('Anglo-Chinese Sch (Independent)','Yes','No','Yes','No','Yes','No'),
('Bartley Sec Sch','Yes','No','No','No','No','No'),
('Assumption English Sch','Yes','No','No','No','No','No'),
('Beatty Sec Sch','Yes','Yes','Yes','No','Yes','No'),
('Bedok View Sec Sch','Yes','No','Yes','No','No','No'),
('Bedok South Sec Sch','Yes','No','No','No','No','No'),
('Bendemeer Sec Sch','No','No','No','No','Yes','No'),
('Boon Lay Sec Sch','Yes','No','Yes','No','No','No'),
('Bowen Sec Sch','Yes','No','Yes','No','Yes','No'),
('Bukit Batok Sec Sch','Yes','No','No','No','No','No'),
('Bukit Panjang Govt. High Sch','Yes','No','Yes','Yes','No','No'),
('Bukit View Sec Sch','Yes','No','Yes','No','Yes','No'),
('Catholic High Sch','Yes','No','No','No','No','No'),
('Cedar Girls´ Sec Sch','Yes','No','Yes','No','Yes','No'),
('CHIJ Katong Convent','Yes','No','No','No','No','No'),
('CHIJ Sec (Toa Payoh)','Yes','No','No','No','No','No'),
('CHIJ St. Joseph´s Convent','Yes','No','No','No','No','No'),
('CHIJ St. Nicholas Girls´ Sch','Yes','No','No','No','No','No'),
('CHIJ St. Theresa´s Convent´25','Yes','No','No','No','No','No'),
('Christ Church Sec Sch','Yes','No','No','No','No','No'),
('Chua Chu Kang Sec Sch','Yes','No','Yes','No','Yes','No'),
('Chung Cheng High Sch (Main)','Yes','No','No','No','No','No'),
('Chung Cheng High Sch (Yishun)','Yes','No','No','No','No','No'),
('Clementi Town Sec Sch','Yes','No','Yes','No','Yes','No'),
('Commonwealth Sec Sch','Yes','Yes','Yes','No','Yes','No'),
('Crescent Girls´ Sch','Yes','No','Yes','Yes','Yes','Yes'),
('Deyi Sec Sch','Yes','No','No','No','No','No'),
('Dunman High Sch','Yes','No','No','No','No','No'),
('Dunman Sec Sch','Yes','No','Yes','No','Yes','No'),
('East Spring Sec Sch','Yes','No','Yes','No','No','No'),
('Edgefield Sec Sch','Yes','No','Yes','No','No','No'),
('Evergreen Sec Sch','Yes','No','Yes','No','No','No'),
('Fairfield Methodist Sch (Sec)','Yes','No','No','No','No','No'),
('Fajar Sec Sch','No','No','No','No','Yes','No'),
('Fuchun Sec Sch','Yes','No','No','No','No','No'),
('Fuhua Sec Sch','Yes','No','No','No','No','No'),
('Gan Eng Seng Sch','Yes','No','No','No','No','No'),
('Geylang Methodist Sch (Sec)','Yes','No','No','No','No','No'),
('Greenridge Sec Sch','Yes','No','No','No','No','No'),
('Guangyang Sec Sch','Yes','No','No','No','No','No'),
('Hai Sing Catholic Sch','Yes','No','No','No','No','No'),
('Hillgrove Sec Sch','Yes','No','No','No','No','No'),
('Holy Innocents´ High Sch','Yes','No','No','No','No','No'),
('Hua Yi Sec Sch','Yes','No','No','No','No','No'),
('Hwa Chong Institution','Yes','No','No','No','No','No'),
('Junyuan Sec Sch','Yes','No','Yes','No','No','No'),
('Jurong Sec Sch','Yes','No','Yes','No','No','No'),
('Jurong West Sec Sch','Yes','No','No','No','Yes','Yes'),
('Jurongville Sec Sch','Yes','No','Yes','No','No','No'),
('Juying Sec Sch','Yes','No','No','No','No','No'),
('Kent Ridge Sec Sch','Yes','No','Yes','No','No','No'),
('Kranji Sec Sch','Yes','No','No','No','No','No'),
('Kuo Chuan Presbyterian Sec Sch','Yes','No','No','No','Yes','No'),
('Loyang View Sec Sch','Yes','No','No','No','No','No'),
('Manjusri Sec Sch','Yes','No','No','No','No','No'),
('Maris Stella High Sch','Yes','No','No','No','No','No'),
('Marsiling Sec Sch','Yes','No','No','No','Yes','Yes'),
('Mayflower Sec Sch','Yes','No','Yes','No','No','No'),
('Meridian Sec Sch','Yes','No','No','No','No','No'),
('Methodist Girls´ Sch (Sec)','Yes','No','Yes','No','Yes','No'),
('Montfort Sec Sch','Yes','No','No','No','No','No'),
('Nan Chiau High Sch','Yes','No','No','No','No','No'),
('Nan Hua High Sch','Yes','No','No','No','No','No'),
('Nanyang Girls´ High Sch','Yes','No','No','No','No','No'),
('National Junior College','Yes','No','Yes','No','Yes','No'),
('Ngee Ann Sec Sch','Yes','Yes','Yes','No','No','No'),
('North Vista Sec Sch','Yes','No','Yes','No','No','No'),
('Orchid Park Sec Sch','Yes','No','Yes','No','No','No'),
('Outram Sec Sch','Yes','No','No','No','No','No'),
('Pasir Ris Crest Sec Sch','Yes','No','No','No','Yes','Yes'),
('Pasir Ris Sec Sch','Yes','No','Yes','No','No','No'),
('Paya Lebar Methodist Girls´ Sch (Sec)','Yes','No','Yes','No','Yes','No'),
('Pei Hwa Sec Sch','Yes','No','No','No','No','No'),
('Peirce Sec Sch','Yes','No','No','No','No','No'),
('Punggol Sec Sch','Yes','No','Yes','No','Yes','No'),
('Presbyterian High Sch','Yes','No','No','No','No','No'),
('Queensway Sec Sch','Yes','No','No','No','No','No'),
('Raffles Institution','Yes','No','Yes','No','Yes','No'),
('Raffles Girls´ Sch (Sec)','Yes','No','Yes','No','Yes','No'),
('River Valley High Sch','Yes','No','No','No','No','No'),
('Riverside Sec Sch','Yes','No','Yes','No','Yes','No'),
('Sembawang Sec Sch','Yes','No','No','No','No','No'),
('Seng Kang Sec Sch','Yes','No','No','No','No','No'),
('Serangoon Garden Sec Sch','Yes','No','No','No','No','No'),
('Singapore Chinese Girls´ Sch','Yes','No','Yes','No','No','No'),
('Springfield Sec Sch','Yes','No','No','No','No','No'),
('St. Andrew´s Sec Sch','Yes','No','No','No','Yes','No'),
('St. Hilda´s Sec Sch','Yes','No','No','No','No','No'),
('St. Joseph´s Institution','Yes','No','Yes','No','Yes','No'),
('St. Margaret´s Sec Sch','Yes','No','No','No','Yes','No'),
('Swiss Cottage Sec Sch','Yes','No','Yes','No','Yes','No'),
('Tampines Sec Sch','Yes','No','No','No','No','No'),
('Tanjong Katong Girls´ Sch','Yes','No','Yes','No','Yes','No'),
('Tanjong Katong Sec Sch','Yes','No','Yes','Yes','No','No'),
('Teck Whye Sec Sch','Yes','No','No','No','Yes','No'),
('Temasek Junior College','Yes','No','Yes','No','Yes','No'),
('Temasek Sec Sch','Yes','No','Yes','Yes','Yes','No'),
('Unity Sec Sch','Yes','No','Yes','No','Yes','No'),
('Victoria Sch','Yes','No','Yes','No','Yes','No'),
('West Spring Sec Sch','Yes','No','No','No','No','No'),
('Whitley Sec Sch','Yes','No','No','No','No','No'),
('Woodgrove Sec Sch','Yes','No','No','No','No','No'),
('Westwood Sec Sch','Yes','No','No','No','No','No'),
('Woodlands Ring Sec Sch','Yes','No','Yes','No','No','No'),
('Xinmin Sec Sch','Yes','No','Yes','No','No','No'),
('Woodlands Sec Sch','Yes','No','Yes','No','Yes','No'),
('Yio Chu Kang Sec Sch','Yes','No','No','No','No','No'),
('Yishun Sec Sch','Yes','No','No','No','No','No'),
('Yishun Town Sec Sch','Yes','No','No','No','No','No'),
('Yuan Ching Sec Sch','Yes','No','No','No','No','No'),
('Yuhua Sec Sch','Yes','No','No','No','No','No'),
('Yuying Sec Sch','Yes','No','No','No','No','No'),
('Zhenghua Sec Sch','Yes','No','No','No','No','No'),
('Zhonghua Sec Sch','Yes','No','No','No','No','No'),
('MOE Language Centre (Bishan)','No','No','Yes','Yes','No','No'),
('Umar Pulavar Tamil Language Centre','No','No','No','No','Yes','Yes');

CREATE TABLE public.in_escuelas_auditoria
(
	school_id int unique,
    y2020_school_centre character varying(50) COLLATE pg_catalog."default",
    offer_hcl Logico COLLATE pg_catalog."default",
    hcl_designated_centre Logico COLLATE pg_catalog."default",
    offer_hml Logico COLLATE pg_catalog."default",
    hml_designated_centre Logico COLLATE pg_catalog."default",
    offer_htl Logico COLLATE pg_catalog."default",
    htl_designated_centre Logico COLLATE pg_catalog."default"
)
CREATE TABLE public.up_escuelas_auditoria
(
	school_id int,
    y2020_school_centre character varying(50) COLLATE pg_catalog."default",
    offer_hcl Logico COLLATE pg_catalog."default",
    hcl_designated_centre Logico COLLATE pg_catalog."default",
    offer_hml Logico COLLATE pg_catalog."default",
    hml_designated_centre Logico COLLATE pg_catalog."default",
    offer_htl Logico COLLATE pg_catalog."default",
    htl_designated_centre Logico COLLATE pg_catalog."default"
)
CREATE TABLE public.del_escuelas_auditoria
(
	school_id int,
    y2020_school_centre character varying(50) COLLATE pg_catalog."default",
    offer_hcl Logico COLLATE pg_catalog."default",
    hcl_designated_centre Logico COLLATE pg_catalog."default",
    offer_hml Logico COLLATE pg_catalog."default",
    hml_designated_centre Logico COLLATE pg_catalog."default",
    offer_htl Logico COLLATE pg_catalog."default",
    htl_designated_centre Logico COLLATE pg_catalog."default"
)
CREATE OR REPLACE FUNCTION tr_insert_escuela() RETURNS TRIGGER AS $insert$
DECLARE BEGIN
INSERT INTO in_escuelas_auditoria VALUES(new.school_id, new.y2020_school_centre,new.offer_hcl,new.hcl_designated_centre,new.offer_hml,new.hml_designated_centre,new.offer_htl,new.htl_designated_centre);
RETURN NULL;
END;
$insert$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION tr_delete_escuela() RETURNS TRIGGER AS $delete$
DECLARE BEGIN
INSERT INTO del_escuelas_auditoria VALUES(old.school_id, old.y2020_school_centre,old.offer_hcl,old.hcl_designated_centre,old.offer_hml,old.hml_designated_centre,old.offer_htl,old.htl_designated_centre);
RETURN NULL;
END;$delete$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION tr_actualiza_escuela() RETURNS TRIGGER AS
$actualiza$
DECLARE BEGIN
IF new.y2020_school_centre IS NOT NULL
THEN
INSERT INTO up_escuelas_auditoria
VALUES(old.school_id,old.y2020_school_centre,old.offer_hcl,old.hcl_designated_centre,old.offer_hml,old.hml_designated_centre,old.offer_htl,old.htl_designated_centre);
END IF;
RETURN NULL;
END;
$actualiza$
LANGUAGE plpgsql;

CREATE TRIGGER in_trigger AFTER INSERT ON escuelas FOR EACH ROW EXECUTE
PROCEDURE tr_insert_escuela();
CREATE TRIGGER del_trigger AFTER DELETE ON escuelas FOR EACH ROW EXECUTE
PROCEDURE tr_delete_escuela();
CREATE TRIGGER actualiza_trigger AFTER UPDATE ON escuelas FOR EACH ROW
EXECUTE
PROCEDURE tr_actualiza_escuela() ;