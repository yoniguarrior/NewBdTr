-- 1. Borrar Opciones Globales de Divi (tabla x8akh_options)
DELETE FROM x8akh_options
WHERE option_name LIKE 'et\_%'
   OR option_name LIKE '\_et\_%'
   OR option_name LIKE 'divi\_%'
   OR option_name LIKE '%divi%'
   OR option_name LIKE 'elegant\_%'
   OR option_name LIKE '%elegantthemes%';

-- 2. Borrar Transients específicos de Divi (caché temporal)
DELETE FROM x8akh_options
WHERE option_name LIKE '\_transient\_et\_%'
   OR option_name LIKE '\_transient\_timeout\_et\_%'
   OR option_name LIKE '\_transient\_divi\_%'
   OR option_name LIKE '\_transient\_timeout\_divi\_%';


-- 3. Borrar Metadatos de Entradas/Páginas (tabla x8akh_postmeta)
DELETE FROM x8akh_postmeta
WHERE meta_key LIKE '\_et\_%'
   OR meta_key LIKE 'et\_%'
   OR meta_key = '_et_pb_use_builder'
   OR meta_key = '_et_pb_old_content'
   OR meta_key LIKE '_et_pb_%'
   OR meta_key LIKE '%divi%';


-- 4. Borrar los posts (¡solo si confirmaste no los necesitas!)
DELETE FROM x8akh_posts
WHERE post_type IN ('et_pb_layout', 'et_template', 'project', 'et_pb_role');


-- 5. Borrar Metadatos de Usuario (tabla x8akh_usermeta)
DELETE FROM x8akh_usermeta
WHERE meta_key LIKE '%et\_%'
   OR meta_key LIKE '%divi%';


-- ---------------------------------------------------------------------
-- 6. Borrar Términos / Taxonomías Propias (si usaste Portfolio de Divi)
-- ---------------------------------------------------------------------
-- Si confirmas que no los necesitas, bórralos vía Escritorio de WordPress
-- (Entradas > Categorías del portfolio) en vez de SQL directo, para que
-- WordPress limpie también las relaciones en wp_term_relationships.

-- 7. Optimizar las tablas
OPTIMIZE TABLE x8akh_options, x8akh_postmeta, x8akh_usermeta, x8akh_posts;
