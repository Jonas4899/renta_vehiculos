CREATE TABLE Cliente (
  Identificacion varchar(255) PRIMARY KEY,
  Tipo_identificacion varchar(255),
  Nombre varchar(255),
  Fecha_nacimiento date,
  Correo_electronico varchar(255),
  Numero_celular varchar(255)
);

CREATE TABLE  Informacion_Bancaria  (
   Id int AUTO_INCREMENT PRIMARY KEY,
   Cliente_Id  varchar(255),
   Nombre_titular  varchar(255),
   Numero_tarjeta  varchar(255),
   Correo_electronico  varchar(255),
   Fecha_expiracion  date,
   CCV  varchar(255)
);

CREATE TABLE  Reserva  (
   Id int AUTO_INCREMENT PRIMARY KEY,
   Cliente_Id  varchar(255),
   Ubicacion  varchar(255),
   Fecha_inicio  date,
   Fecha_fin  date,
   Vehiculo_Id  varchar(255),
   Valor_total  decimal,
   Pago_asociado  varchar(255)
);

CREATE TABLE  Seguro  (
   Id int AUTO_INCREMENT PRIMARY KEY,
   Compania_seguros  varchar(255),
   Numero_poliza  varchar(255),
   Cobertura  text,
   Fecha_vigencia  date
);

CREATE TABLE  Transferencia  (
   Id int AUTO_INCREMENT PRIMARY KEY,
   Vehiculo_Id  varchar(255),
   Fecha_hora_salida  datetime,
   Kilometraje_actual  int,
   Oficina_destino  varchar(255),
   Estado_general  varchar(255),
   Estado_equipamiento  varchar(255),
   Fecha_hora_llegada  datetime,
   Oficina_origen  varchar(255),
   Estado_vehiculo  varchar(255),
   Reporte_danios  text,
   Observaciones  text,
   Empleado_Id  varchar(255),
   Administrador_Id  varchar(255)
);

CREATE TABLE  Checkin_Alquiler  (
   Id int AUTO_INCREMENT PRIMARY KEY,
   Cliente_Id  varchar(255) ,
   Vehiculo_Id  varchar(255),
   Fecha_devolucion  date,
   Kilometraje_actual  int,
   Estado_general  varchar(255),
   Limpieza  varchar(255),
   Nivel_combustible  varchar(255),
   Funcionamiento_luces  varchar(255),
   Estado_equipamiento  varchar(255),
   Imagenes  varchar(255),
   Formulario_danios  varchar(255),
   Danios_observados  text,
   Estimacion_costo  decimal,
   Imagenes_danios  varchar(255),
   Empleado_Id  varchar(255)
);

CREATE TABLE  Checkout_Alquiler  (
   Id int AUTO_INCREMENT PRIMARY KEY,
   Reserva_Id  int,
   Empleado_Id  varchar(255)
);

CREATE TABLE  Vehiculo  (
   Matricula varchar(255) PRIMARY KEY,
   Marca  varchar(255),
   Color  varchar(255),
   Anio  int,
   Imagen  varchar(255),
   Tipo_vehiculo  varchar(255),
   Fecha_registro  date,
   Modelo  varchar(255),
   Capacidad  int,
   Estado_vehiculo  varchar(255),
   Kilometraje  int,
   Tipo_combustible  varchar(255),
   Tipo_transmision  varchar(255),
   Precio_alquiler  decimal,
   Numero_identificacion  varchar(255),
   Caracteristicas_especiales  text,
   Id_seguro int
);

CREATE TABLE  Administrador  (
   Identificacion  varchar(255) PRIMARY KEY,
   Nombre  varchar(255),
   Licencia_conducir  varchar(255),
   Correo_electronico  varchar(255),
   Departamento  varchar(255),
   Direccion_residencia  varchar(255),
   Numero_celular  varchar(255),
   Nombre_usuario  varchar(255),
   Contrasena  varchar(255)
);

CREATE TABLE  Empleado  (
   Identificacion varchar(255) PRIMARY KEY,
   Nombre  varchar(255),
   Licencia_conducir  varchar(255),
   Correo_electronico  varchar(255),
   Direccion_residencia  varchar(255),
   Numero_celular  varchar(255),
   Puesto  varchar(255),
   Departamento  varchar(255),
   Permisos  text,
   Descripcion_cargo  text,
   Horario_trabajo  varchar(255),
   Nombre_usuario  varchar(255),
   Contrasena  varchar(255)
);

ALTER TABLE  Informacion_Bancaria  ADD FOREIGN KEY ( Cliente_Id ) REFERENCES  Cliente  ( Identificacion );

ALTER TABLE  Reserva  ADD FOREIGN KEY ( Cliente_Id ) REFERENCES  Cliente  ( Identificacion );

ALTER TABLE  Reserva  ADD FOREIGN KEY ( Vehiculo_Id ) REFERENCES  Vehiculo  ( Matricula );

ALTER TABLE  Transferencia  ADD FOREIGN KEY ( Vehiculo_Id ) REFERENCES  Vehiculo  ( Matricula );

ALTER TABLE  Transferencia  ADD FOREIGN KEY ( Empleado_Id ) REFERENCES  Empleado  ( Identificacion );

ALTER TABLE  Transferencia  ADD FOREIGN KEY ( Administrador_Id ) REFERENCES  Administrador  ( Identificacion );

ALTER TABLE  Checkin_Alquiler  ADD FOREIGN KEY ( Cliente_Id ) REFERENCES  Cliente  ( Identificacion );

ALTER TABLE  Checkin_Alquiler  ADD FOREIGN KEY ( Vehiculo_Id ) REFERENCES  Vehiculo  ( Matricula );

ALTER TABLE  Checkin_Alquiler  ADD FOREIGN KEY ( Empleado_Id ) REFERENCES  Empleado  ( Identificacion );

ALTER TABLE  Checkout_Alquiler  ADD FOREIGN KEY ( Reserva_Id ) REFERENCES  Reserva  ( Id );

ALTER TABLE  Checkout_Alquiler  ADD FOREIGN KEY ( Empleado_Id ) REFERENCES  Empleado  ( Identificacion );

ALTER TABLE  Vehiculo  ADD FOREIGN KEY ( Id_seguro ) REFERENCES  Seguro  ( Id );
