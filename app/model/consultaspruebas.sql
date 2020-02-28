select * from detalle_venta
select * from productos

select * from detalle_venta as dt inner join productos as p on dt.id_producto = p.id_producto 
ORDER BY (SELECT COUNT(*) FROM detalle_venta)

SELECT detalle_venta.id_detalle_v, productos.nombre_p FROM detalle_venta 
INNER JOIN productos ON detalle_venta.id_producto = productos.id_producto
WHERE 

SELECT id_detalle_v, id_producto 
COUNT(id_detalle_v) AS "a" 
FROM detalle_venta
GROUP BY id_producto, 
ORDER BY "a" DESC
LIMIT 20;

SELECT id_detalle_v, id_producto
FROM detalle_venta
GROUP BY id_detalle_v, id_producto
ORDER BY COUNT(id_producto) DESC
LIMIT 20;

SELECT COUNT(*) FROM detalle_venta

SELECT top1 
    `value`,
    COUNT(`value`) AS `value_occurrence` 
FROM     
    `my_table`
GROUP BY 
    `value`
ORDER BY 
    `value_occurrence` DESC;
	
select * from productos
select * from resenia

inset

#prodcutos mas vendidos!
SELECT ROUND(AVG(estrellas),1) as Ranking FROM resenia WHERE id_producto = 6
SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) 
AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking
FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto
GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 8;

SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) 
AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking
FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto
GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 20;

select id_producto, sum(cantidad) from detalle_venta group by id_producto ORDER BY sum(cantidad) DESC LIMIT 6;

select * from detalle_venta


SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio" FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p ORDER BY SUM(cantidad) DESC LIMIT 6;

SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 6;


SELECT ROUND(AVG(estrellas),1) as Ranking, productos.nombre_p, productos.descripcion_p, productos.precio_p FROM resenia inner join productos on productos.id_producto = resenia.id_producto WHERE productos.id_producto = 1 GROUP BY productos.nombre_p, productos.descripcion_p, productos.precio_p 


select * from productos where id_producto = 6

select * from productos
select * from resenia

nombre, descripcion, precio