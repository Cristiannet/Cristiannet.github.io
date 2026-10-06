GAP Gestión y Asesoría Profesional — paquete para Arsys

CONTENIDO
Este directorio es la versión preparada para subir al alojamiento web.
El archivo index.html está en la raíz, junto con assets/, css/, js/ y content/.

SUBIDA A ARSYS
1. Entra al panel de Arsys y abre el administrador de archivos/FTP del alojamiento.
2. Entra en la carpeta pública del dominio (habitualmente public_html, www o httpdocs, según el servicio).
3. Sube TODO el contenido de esta carpeta, no la carpeta GAP_Arsys como una carpeta adicional.
4. Verifica que index.html quede directamente en la raíz pública.
5. Si el dominio será gapgestoriaprofesional.com, apunta el dominio al mismo alojamiento y espera a la propagación DNS.

IMPORTANTE
- La web es HTML/CSS/JS estático.
- Los formularios actualmente muestran una confirmación en pantalla, pero NO envían el formulario a un correo. Para producción hay que conectar un endpoint de envío (por ejemplo, PHP/mail de Arsys o un servicio externo).
- robots.txt y sitemap.xml ya están preparados para gapgestoriaprofesional.com.
