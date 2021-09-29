

Create Table TipoUsuarios
(
	idTipo serial primary key not null,
	Nombre varchar(30) not null,
	Activo int not null
);


Insert into TipoUsuarios(Nombre,Activo) values ('Administrador', 1);

Select * from TipoUsuarios;

Create Table Usuarios
(
	idUsuario serial primary key not null,
	Nombre varchar(50) not null,
	ApellidoPaterno varchar(50) null,
	ApellidoMaterno varchar(50) null,
	Correo varchar(100) not null,
	Contraseña varchar(100) not null,
	FechaCumpleaños date null,
	Activo int not null,
	foto varchar(100) not null, 
	idTipo int not null references TipoUsuarios(idTipo)
);

Insert into Usuarios (Nombre, ApellidoPaterno, ApellidoMaterno, Correo, Contraseña, Activo, foto, idTipo)
values('Ray', 'Garcia', 'Gonzalez', 'ray@comerciolibre.com', '123', 1, 'assets/img/client-img4.png', 1);

Select concat_ws(' ', U.nombre, apellidopaterno, apellidomaterno) as nombre, correo, TU.nombre as tipo, contraseña, U.activo, foto 
from Usuarios U inner join TipoUsuarios TU
on U.idTipo = TU.idTipo
where correo = 'ray@comerciolibre.com';

Select 

Create Table Clientes
(
	idCliente serial primary key not null,
	Nombre varchar(50) not null,
	ApellidoPaterno varchar(50) null,
	ApellidoMaterno varchar(50) null,
	Correo varchar(100) not null,
	Contraseña varchar(100) not null,
	FechaCumpleaños date null,
	foto varchar(100) not null, 
	Activo int not null,
	Ciudad varchar(50) not null,
	Pais varchar(50) not null,
	Calle varchar(50) null,
	Num_Int int null
);

Alter Table Clientes
add constraint UQ_correo
unique (Correo);

Create Table Proveedores
(
	idProveedor serial primary key not null,
	NombreEmpresa varchar(100) not null,
	Telefono int not null,
	Correo varchar(100) null
);

Create Table Categorias
(
	idCategoria serial primary key not null,
	NombreCategoria varchar(100) not null,
	Activo int not null
);

Create Table Productos
(
	idProducto serial primary key not null,
	idCategoria int not null references Categorias(idCategoria),
	idProveedor int not null references Proveedores(idProveedor),
	CodigoBarras varchar(16) not null, 
	Nombre varchar(100) not null,
	Precio float not null,
	Descripcion text not null,
	Stock int not null,
	foto varchar(100) not null
);

Create Table Ventas(
	idVenta serial primary key not null,
	idCliente int not null references Clientes(idCliente),
	totalVenta float not null,
	status int not null,
	FechaVenta date not null
);

Create Table DetalleVentas 
(
	idVenta int not null references Ventas(idVenta),
	idProducto int not null references Productos(idProducto),
	Cantidad int not null,
	Precio float not null,
	primary key (idVenta, idProducto)
);

