-- 1. Revisar qué opciones existen relacionadas con Divi / Elegant Themes
SELECT option_id, option_name
FROM x8akh_options
WHERE option_name LIKE 'et\_%'
   OR option_name LIKE '\_et\_%'
   OR option_name LIKE 'divi\_%'
   OR option_name LIKE '%divi%'
   OR option_name LIKE 'elegant\_%'
   OR option_name LIKE '%elegantthemes%';

-- 2. Revisar Transients específicos de Divi (caché temporal)
SELECT option_name FROM x8akh_options
WHERE option_name LIKE '\_transient\_et\_%'
   OR option_name LIKE '\_transient\_timeout\_et\_%'
   OR option_name LIKE '\_transient\_divi\_%'
   OR option_name LIKE '\_transient\_timeout\_divi\_%';

-- 3. Revisar Metadatos de Entradas/Páginas (tabla x8akh_postmeta)
SELECT meta_id, post_id, meta_key
FROM x8akh_postmeta
WHERE meta_key LIKE '\_et\_%'
   OR meta_key LIKE 'et\_%'
   OR meta_key = '_et_pb_use_builder'
   OR meta_key = '_et_pb_old_content'
   OR meta_key LIKE '_et_pb_%'
   OR meta_key LIKE '%divi%';

-- 4. Ver cuántos Custom Post Types propios de Divi hay y de qué tipo
SELECT ID, post_type, post_title, post_status
FROM x8akh_posts
WHERE post_type IN ('et_pb_layout', 'et_template', 'project', 'et_pb_role');

-- 5. Revisar Metadatos de Usuario (tabla x8akh_usermeta)
SELECT umeta_id, user_id, meta_key
FROM x8akh_usermeta
WHERE meta_key LIKE '%et\_%'
   OR meta_key LIKE '%divi%';

-- 6. Revisar Términos / Taxonomías Propias (si usaste Portfolio de Divi)
SELECT t.term_id, t.name, tt.taxonomy, tt.count
FROM x8akh_terms t
INNER JOIN x8akh_term_taxonomy tt ON t.term_id = tt.term_id
WHERE tt.taxonomy = 'project_category';
