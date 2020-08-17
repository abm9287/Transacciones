-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler  version: 0.9.3-beta
-- PostgreSQL version: 12.0
-- Project Site: pgmodeler.io
-- Model Author: ---


-- Database creation must be done outside a multicommand file.
-- These commands were put in this file only as a convenience.
-- -- object: new_database | type: DATABASE --
-- -- DROP DATABASE IF EXISTS new_database;
-- CREATE DATABASE new_database;
-- -- ddl-end --
-- 

-- object: public.datos | type: TABLE --
-- DROP TABLE IF EXISTS public.datos CASCADE;


CREATE TABLE public.datos (
	id serial NOT NULL,
	correo varchar(100) NOT NULL,
	contrasena varchar NOT NULL,
	CONSTRAINT id_pk PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.datos OWNER TO postgres;
-- ddl-end --
s
-- object: public.login | type: TABLE --
-- DROP TABLE IF EXISTS public.login CASCADE;
CREATE TABLE public.login (
	"idUsuario" serial NOT NULL,
	"nombreUsuario" varchar(100) NOT NULL,
	"apellidoUsuario" varchar(100) NOT NULL,
	"correoUsuario" varchar(20),
	"contrasenaUsuario" character(55) NOT NULL,
	id_fk serial NOT NULL,
	CONSTRAINT "idUsuario_pk" PRIMARY KEY ("idUsuario")

);
-- ddl-end --
ALTER TABLE public.login OWNER TO postgres;
-- ddl-end --

-- object: id_fk | type: CONSTRAINT --
-- ALTER TABLE public.login DROP CONSTRAINT IF EXISTS id_fk CASCADE;
ALTER TABLE public.login ADD CONSTRAINT id_fk FOREIGN KEY (id_fk)
REFERENCES public.datos (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;
-- ddl-end --


-------------------------------------------------------- MI BASE DE DATOS---------------------------------------HOLA ESTE ES......
CREATE TABLE public.datos (
	id serial NOT NULL,
	correo varchar(100) NOT NULL,
	contrasena varchar NOT NULL,
	CONSTRAINT id_pk PRIMARY KEY (id)

);

CREATE TABLE public.login (
	"idUsuario" serial NOT NULL,
	"nombreUsuario" varchar(100) NOT NULL,
	"apellidoUsuario" varchar(100) NOT NULL,
	"correoUsuario" varchar(20),
	"contrasenaUsuario" character(55) NOT NULL,
	id_fk serial NOT NULL,
	CONSTRAINT "idUsuario_pk" PRIMARY KEY ("idUsuario")
);

ALTER TABLE public.login ADD CONSTRAINT id_fk FOREIGN KEY (id_fk)
REFERENCES public.datos (id) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION;