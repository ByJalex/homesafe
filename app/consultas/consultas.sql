SELECT prod.nombre_p, prod.descripcion_p from productos as prod WHERE id_categoria_p = 1;

SELECT CASE WHEN EXISTS (SELECT * FROM cupones WHERE cupon = 'NOMBREDELCUPON' AND id_validez_C = 1 ) THEN CAST(1 AS BIT) ELSE CAST(0 AS BIT) END;

SELECT prod.nombre_p, prod.descripcion_p from productos as prod WHERE precio_p BETWEEN 15.0 AND 90.1;

SELECT img.id_producto FROM imagenes_p as img, productos as prod WHERE prod.id_producto = 1;

SELECT res.comentarios, res.estrellas FROM resenia as res, productos as prod WHERE prod.id_est_p = 1 AND prod.id_producto = 1;
