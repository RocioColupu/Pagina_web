create database AEDIMA;

create table Usuarios(
    cod_usu int primary key,
    Nombres varchar(50) not null,
    Apellidos varchar(50) not null,
	Fec_Nac date not null,
    DNI int not null,
    Direccion varchar(50) not null,
    Telefono int not null,
	id_deportes int not null
    );
	alter table Usuarios add foreign key (id_deportes) references Deportes(id_deportes)

create table Administrador(
    cod_admin int primary key,
    Nombres varchar(50) not null,
    Apellidos varchar(50) not null,
    DNI int not null,
    Lugar_Nac varchar(50) not null,
    Fec_Nac date,
    Direccion varchar(50) not null,
    Telefono int not null,
    cargo varchar(20) not null,
	cod_usu int not null
	);
	alter table Administrador add foreign key(cod_usu) references Usuarios(cod_usu)


create table Deportes(
    id_deportes int primary key,
    Nombre varchar(50) not null,
    Descripcion varchar(75) not null,
	id_ind int not null,
	id_ins int not null
    );
	alter table Deportes add foreign key(id_ind) references Indumentaria(id_ind)
	alter table Deportes add foreign key(id_ins) references Instalaciones(id_ins)

create table Indumentaria(
    id_ind int primary key,
    color varchar(15) not null,
    talla int not null,
    categoria varchar(20) not null
    );

create table Instalaciones(
    id_ins int primary key,
    Nombre varchar(50) not null,
    Direccion varchar(50) not null
    );

create table Profesores(
    id_prof int primary key,
    Nombres varchar(50) not null,
    Apellidos varchar(50) not null,
    Deporte varchar(50) not null,
    Descripcion varchar(50) not null,
    Telefono int not null,
	id_deportes int not null
);
	alter table Profesores add foreign key(id_deportes) references Deportes(id_deportes)

create table Solicitud(
	id_solicitud int primary key,
	cod_usu int not null,
	fecha date,
	id_deporte int not null,
);

alter table Solicitud add foreign key (cod_usu) references Usuarios(cod_usu)
alter table Solicitud add foreign key (id_deporte) references Deportes(id_deportes)