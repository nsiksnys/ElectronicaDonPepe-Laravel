# Electronica Don Pepe 
## Casos de uso

### Agregar Venta
**Pre condiciones:** 

El usuario selecciona la opcion del menú “Registrar Venta”.

**Camino principal:**

1. El usuario ingresa los datos de la factura y presiona el boton Guardar.
2. El sistema verifica que el numero de factura ingresado sea válida y que no haya
sido registrada por otro vendedor y al ser correcto el sistema comunica al usuario que
se registro La venta.
3. El sistema permite registrar una nueva factura.

**Camino alternativo:**

1. El usuario ingresa los datos de la factura y presiona el boton Guardar.
3. El sistema verifica que el numero de factura ingresado sea válida y que no haya sido registrada por otro vendedor y al ser incorrecto el sistema comunica al usuario que la venta ya se encuentra registrada, además muestra el nombre del vendedor y la fecha y hora en La que fue registrada.
4. El sistema permite al usuario corregir los datos para volver a presionar el boton guardar.

### Obtener reporte de Comisiones y premios
**Pre condiciones:** 

El usuario selecciona la opcion del menú “Reporte Comisiones y Premios”.

**Camino principal:**

1. El usuario selecciona uno o varios vendedores y el período a calcular y presiona  “Generar Reporte”
2. El sistema calcula las comisiones y premios para el/los vendedor/ES en el período seleccionado y los muestra por pantalla.

**Camino alternativo:**  

N/A

### Consultar Ventas Realizadas
**Pre condiciones:** 

El usuario selecciona la opcion del menú “Consultar ventas realizadas”.

**Camino principal:**

1. El usuario selecciona el período a consultar y presiona  “Generar Reporte”
2. El sistema obtiene las ventas realizadas durante el período seleccionado y los muestra por pantalla.

**Camino alternativo:** 

N/A

### Actualizar montos de Comisiones y Premios
**Pre condiciones:** 

El usuario selecciona la opcion del menú “Actualizar montos de comisiones y Premios”.

**Camino principal:**

1. El usuario selecciona el adicional a actualizar y presiona el boton “Actualizar monto”
2. El sistema solicita el nuevo monto del adicional
3. El usuario ingresa el nuevo monto y presiona el boton “Confirmar Actualizacion”.
4. El sistema valida que el nuevo monto sea un numero entero positivo diferente al  
anterior y de ser correcto actualiza el monto y comunica al usuario que el monto fue 
actualizado correctamente
5. El sistema permite al usuario actualizar un adicional

**Camino alternativo:**

1. El usuario selecciona el adicional a actualizar y presiona el boton “Actualizar monto”
2. El sistema solicita el nuevo monto del adicional
3. El usuario ingresa el nuevo monto y presiona el boton “Confirmar Actualizacion”.
4. El sistema valida que el nuevo monto sea un numero entero positivo diferente al  
anterior y de ser incorrecto comunica al usuario que el monto ingresado no es valido 
6. El sistema permite al usuario corregir los datos para volver a presionar “Confirmar Actualizacion”
 
## Roles de usuario:
Los usuarios del sistema posen un único rol, el mismo determina a que funciones del sistema tiene acceso el usuario:

* Recursos Humanos 
    * obtener el reporte de las Comisiones y Ventas
    * Actualizar los montos de los premios
   
* Vendedor
    * Verificar las ventas que llevan realizadas
    * Agregar Ventas
    
* Administrador
    * Administra usuarios
