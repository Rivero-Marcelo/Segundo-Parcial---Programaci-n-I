CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    password varchar(255),
    nombreAutor varchar(25),
    apellidoAutor varchar(25)
);



CREATE TABLE `base`.`publicacion` (
  `idPublicacion` INT NOT NULL AUTO_INCREMENT,
  `idAutor` INT NOT NULL,
  `fechaHora` DATETIME NOT NULL,
  `cuerpo` VARCHAR(2500) NOT NULL,
  PRIMARY KEY (`idPublicacion`));

    ALTER TABLE `base`.`publicacion` 
ADD INDEX `idAutor_idx` (`idAutor` ASC);
;
ALTER TABLE `base`.`publicacion` 
ADD CONSTRAINT `idAutor`
  FOREIGN KEY (`idAutor`)
  REFERENCES `base`.`usuario` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;