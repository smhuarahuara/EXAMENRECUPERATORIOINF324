ALTER TABLE academico.alumno ADD password INT NOT NULL DEFAULT 0;
ALTER TABLE academico.alumno ADD estado VARCHAR(30) NOT NULL;
ALTER TABLE academico.alumno ADD nroboleta INT NOT NULL;
ALTER TABLE academico.alumno ADD nmat INT NOT NULL DEFAULT 0;

CREATE TABLE materia (sigla varchar(8), nombre varchar(40));
INSERT INTO `materia`(`sigla`, `nombre`) VALUES ('INF-112','ORGANIZACION DE COMPUTADORAS');
INSERT INTO `materia`(`sigla`, `nombre`) VALUES ('INF-113','LABORATORIO DE COMPUTACION');
INSERT INTO `materia`(`sigla`, `nombre`) VALUES ('MAT-114','MATEMATICA DISCRETA');
INSERT INTO `materia`(`sigla`, `nombre`) VALUES ('MAT-115','ANALISIS NUMERICO');
INSERT INTO `materia`(`sigla`, `nombre`) VALUES ('LAB-111','LABORATORIO DE INF-111');

CREATE TABLE `academico`.`inscrito` ( `id_est` INT NOT NULL , `sigla` VARCHAR(8) NOT NULL ) ENGINE = InnoDB;
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P1','P2','I','INICIO','ESTUDIANTE');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P2','P3','P','CONVOCATORIA','ESTUDIANTE');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P3','P4','P','PAGO DE MATERIAS','CAJA');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P4','P5','P','PAGO REGISTRADO','CAJA');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P5','P6','P','NOTIFICA EL PAGO','KARDEX');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P6','P7','P','HABILITAR MATERIAS','kardex');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P7','P8','P','ELEGIR MATERIAS','ESTUDIANTE');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P8','P9','P','MATERIAS REGISTRADAS','ESTUDIANTE');
INSERT INTO `flujoproceso`(`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES ('F1','P9',' ','F','FINALIZACION','ESTUDIANTE');

ALTER TABLE `alumno` ADD `password` INT NOT NULL;
UPDATE `alumno` SET password='1234' WHERE id=23;
UPDATE `alumno` SET password='2345' WHERE id=25;
UPDATE `alumno` SET password='3456' WHERE id=32;
UPDATE `alumno` SET password='4567' WHERE id=34;
UPDATE `alumno` SET password='5678' WHERE id=36;
UPDATE `alumno` SET password='6789' WHERE id=40;
UPDATE `alumno` SET password='7890' WHERE id=89;

CREATE TABLE `academico`.`alumno_materia` ( `id_alumno` INT NOT NULL , `sigla` VARCHAR(8) NOT NULL ) ENGINE = InnoDB;