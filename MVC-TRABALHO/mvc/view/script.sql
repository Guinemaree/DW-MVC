-------------------------------------------------------------
---FORMANDOS
SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;


ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;


create TABLE public.formandos (
    id integer NOT NULL,
    nome character varying(100),
    email character varying(100),
    telefone character varying(100)
);


ALTER TABLE public.formandos OWNER TO postgres;


create SEQUENCE public.formandos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.formandos_id_seq OWNER TO postgres;

ALTER SEQUENCE public.formandos_id_seq OWNED BY public.formandos.id;

ALTER TABLE ONLY public.formandos ALTER COLUMN id SET DEFAULT nextval('public.formandos_id_seq'::regclass);

INSERT INTO public.formandos VALUES (1, 'Abilio', 'abilio@gmail.com', '9999-8888');
INSERT INTO public.formandos VALUES (2, 'Bernardo', 'bernardo@gmail.com', '9999-1234');

SELECT pg_catalog.setval('public.formandos_id_seq', 2, true);

ALTER TABLE ONLY public.formandos
    ADD CONSTRAINT formandos_pkey PRIMARY KEY (id);

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;

-------------------------------------------------------------------------
---PRESENÇA
SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;


ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;


create TABLE public.presenca (
    id integer NOT NULL,
    nome character varying(100),
    email character varying(100),
    telefone character varying(100)
);


ALTER TABLE public.presenca OWNER TO postgres;


create SEQUENCE public.presenca_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.presenca_id_seq OWNER TO postgres;

ALTER SEQUENCE public.presenca_id_seq OWNED BY public.presenca.id;

ALTER TABLE ONLY public.presenca ALTER COLUMN id SET DEFAULT nextval('public.presenca_id_seq'::regclass);

INSERT INTO public.presenca VALUES (1, 'Abilio', 'abilio@gmail.com', '9999-8888');
INSERT INTO public.presenca VALUES (2, 'Bernardo', 'bernardo@gmail.com', '9999-1234');
INSERT INTO public.presenca VALUES (3, 'GAGA', 'gaga@gmail.com', '1234-5678');
INSERT INTO public.presenca VALUES (4, 'Elton', 'elton@gmail.com', '3456-3333');

SELECT pg_catalog.setval('public.presenca_id_seq', 2, true);

ALTER TABLE ONLY public.presenca
    ADD CONSTRAINT presenca_pkey PRIMARY KEY (id);

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;
----------------------------------------------------------
---CURSOS
SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;


ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;


create TABLE public.cursos (
    id integer NOT NULL,
    nome character varying(100),
    email character varying(100),
    telefone character varying(100)
);


ALTER TABLE public.cursos OWNER TO postgres;


create SEQUENCE public.cursos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.cursos_id_seq OWNER TO postgres;

ALTER SEQUENCE public.cursos_id_seq OWNED BY public.cursos.id;

ALTER TABLE ONLY public.cursos ALTER COLUMN id SET DEFAULT nextval('public.cursos_id_seq'::regclass);

INSERT INTO public.cursos VALUES (1, 'Abilio', 'abilio@gmail.com', '9999-8888');
INSERT INTO public.cursos VALUES (2, 'Bernardo', 'bernardo@gmail.com', '9999-1234');
INSERT INTO public.cursos VALUES (3, 'Diego', 'diego@gmail.com', '6666-7777');
INSERT INTO public.cursos VALUES (4, 'Dilma', 'dilma@gmail.com', '1234-4343');

SELECT pg_catalog.setval('public.cursos_id_seq', 2, true);

ALTER TABLE ONLY public.cursos
    ADD CONSTRAINT cursos_pkey PRIMARY KEY (id);

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;
-----------------------------------------------------
---RELATÓRIO
SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;


ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;


create TABLE public.relatorio (
    id integer NOT NULL,
    nome character varying(100),
    email character varying(100),
    telefone character varying(100)
);


ALTER TABLE public.relatorio OWNER TO postgres;


create SEQUENCE public.relatorio_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.relatorio_id_seq OWNER TO postgres;

ALTER SEQUENCE public.relatorio_id_seq OWNED BY public.relatorio.id;

ALTER TABLE ONLY public.relatorio ALTER COLUMN id SET DEFAULT nextval('public.relatorio_id_seq'::regclass);

INSERT INTO public.relatorio VALUES (1, 'Abilio', 'abilio@gmail.com', '9999-8888');
INSERT INTO public.relatorio VALUES (2, 'Bernardo', 'bernardo@gmail.com', '9999-1234');
INSERT INTO public.relatorio VALUES (3, 'Denilza', 'denilza@gmail.com', '7777-8888');
INSERT INTO public.relatorio VALUES (4, 'kleiton', 'kleiton@gmail.com', '2222-1234');

SELECT pg_catalog.setval('public.relatorio_id_seq', 2, true);

ALTER TABLE ONLY public.relatorio
    ADD CONSTRAINT relatorio_pkey PRIMARY KEY (id);

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;