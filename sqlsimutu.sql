-- membuat database SIMUTU
drop database db_SIMUTU;
create database db_SIMUTU;

-- register
drop table tb_register;
create table tb_register(
	id_register SERIAL PRIMARY KEY, 
	nama_lengkap varchar(50) not null,
	email varchar(50) not null,
	username varchar(50) not null,
	password varchar(50) not null,
	no_telepon varchar(20) not null,
	CONSTRAINT tb_register_id_register_PK PRIMARY KEY(id_register)
);

-- target
drop table tb_target;
create table tb_target(
	id_target INT GENERATED ALWAYS AS IDENTITY,
	id_register int not null,
	nama_target varchar(50) not null,
	nominal_target varchar(50) not null,
	PRIMARY KEY(id_target),
	CONSTRAINT tb_target_id_target_FK FOREIGN KEY(id_register) REFERENCES tb_register(id_register)
);

-- tabungan
drop table tb_tabungan;
create table tb_tabungan(
	id_tabungan INT GENERATED ALWAYS AS IDENTITY,
	id_target int not null,
	tanggal varchar(50) not null,
	jumlah_tabungan varchar(50) not null,
	PRIMARY KEY(id_tabungan)
);

---Membuat FK tabungan references target
ALTER TABLE tb_tabungan ADD CONSTRAINT tb_tabungan_id_tabungan_FK FOREIGN KEY(id_target) REFERENCES tb_target(id_target);

-- hutang
drop table tb_hutang;
create table tb_hutang(
	id_hutang INT GENERATED ALWAYS AS IDENTITY,
	id_tabungan int not null,
	tanggal varchar(50) not null,
	jumlah_hutang varchar(50) not null,
	PRIMARY KEY(id_hutang)
);

---Membuat FK status references target dan tabungan
ALTER TABLE tb_hutang ADD CONSTRAINT tb_hutang_id_hutang_status_FK FOREIGN KEY(id_tabungan) REFERENCES tb_tabungan(id_tabungan);

