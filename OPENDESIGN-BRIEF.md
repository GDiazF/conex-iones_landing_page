# Conex-Iones — Brief OpenDesign (mobile-first)

Usar este archivo como fuente de verdad. **No inventar copy.** Español chileno (tú, no voseo argentino).

---

## Cómo trabajar en OpenDesign

1. Pegar **PROMPT MAESTRO** (abajo) en un canvas nuevo.
2. Diseñar **solo móvil 375×812** hasta aprobar las 5 secciones + nav.
3. Luego pedir **tablet 768**, después **desktop 1280 / 1920**, **sección por sección**.
4. Nunca pedir “mejora todo el responsive” de un golpe (rompe lo ya aprobado).
5. Exportar HTML cuando el móvil esté bien; tablet/desktop se afinan en código si hace falta.

---

## PROMPT MAESTRO (pegar primero)

```
Diseña una landing one-page para Conex-Iones, empresa eléctrica chilena de ~2 años en Iquique y Alto Hospicio.

ENFOQUE: mobile-first. Empieza SOLO en viewport 375×812. No diseñes desktop todavía.

OBJETIVO: transmitir confianza, trabajo prolijo y contacto directo (WhatsApp). No SaaS, no dashboard, no startup tech genérica.

DIRECCIÓN VISUAL (obligatoria):
- Fondo oscuro elegante (#0b1117 / #111a22)
- Acento turquesa #2dd4bf en CTAs, links activos, énfasis
- Tipografía sans-serif fuerte y limpia (estilo Outfit + Source Sans)
- Tono técnico, premium, sobrio
- Botones con radius 8–10px (NO pills)
- Sin cards en el hero
- Sin badges flotantes ni stickers sobre fotos
- Sin purple gradients, sin glow excesivo, sin emojis
- Una composición clara por sección: 1 propósito, 1 título, 1 lead corto

ESTRUCTURA (5 secciones + nav + footer en contacto):
1. Inicio (hero)
2. Servicios
3. Nosotros
4. Proyectos
5. Contacto (+ footer)

ALTURAS (móvil):
- Hero: min-height 100dvh (NO height fijo + overflow hidden). Debe llenar la primera pantalla; si el contenido no cabe, puede crecer un poco.
- Servicios, Nosotros, Proyectos, Contacto: altura natural (crecen con el contenido). NO forzar 100vh en estas secciones en móvil.

NAV MÓVIL:
- Sticky/fixed: logo Conex-Iones + hamburger
- Menú cerrado: solo logo + hamburger (nada de links desktop visibles)
- Menú abierto: overlay full-screen ~98% opaco, links grandes, cierra con X o al tocar un link
- CTA header en móvil: puede ir dentro del overlay o como botón secundario; no saturar el top bar

HERO MÓVIL (primera pantalla):
- Brand visible (logo en nav)
- Eyebrow + H1 + lead + 2 CTAs apilados full-width (min touch 48px)
- Link “Ver proyectos”
- Meta: Presupuesto / Sin compromiso | WhatsApp / Canal principal
- Foto de obra: OCULTA en móvil (prioridad al copy y CTAs)
- CTA primario: Solicitar presupuesto (turquesa sólido)
- CTA secundario: WhatsApp (outline + ícono)
- FAB WhatsApp flotante abajo a la derecha (no tape el form ni el footer)

COPY: usar EXACTAMENTE el copy del brief (sección COPY FINAL). Español chileno. No voseo (nada de “Completá”, “Contanos”, “necesitás”).

CONTENIDO HONESTO:
- Empresa joven (~2 años, desde 2024)
- Zona: Iquique y Alto Hospicio
- No inventar “+15 años”, urgencias 24h, plantas industriales gigantes

PLACEHOLDERS de contacto (dejar visibles para reemplazar después):
- WhatsApp: +56 9 8765 4321 / wa.me/56987654321
- Email: contacto@conex-iones.com
- Horario: Lun–Vie 8:30–19:00

Empieza diseñando SOLO: nav móvil + sección Inicio (hero) en 375×812.
Cuando diga “siguiente”, continúa con Servicios en el mismo viewport móvil.
```

---

## COPY FINAL (no cambiar salvo que el usuario lo pida)

### Nav
- Links: Inicio · Servicios · Nosotros · Proyectos · Contacto
- CTA: Solicitar presupuesto

### Inicio (Hero)
- Eyebrow: `Electricidad · Iquique · Alto Hospicio · Residencial · Comercial`
- H1: `En el norte grande, tu electricidad en buenas manos`
- Lead: `Llevamos dos años en el norte con trato directo. Cotizamos sin compromiso por WhatsApp o formulario en Iquique y Alto Hospicio.`
- CTA primario: `Solicitar presupuesto`
- CTA secundario: `WhatsApp`
- Link: `Ver proyectos`
- Meta: `Presupuesto` / `Sin compromiso` · `WhatsApp` / `Canal principal`

### Servicios
- Eyebrow: `Qué hacemos`
- H2: `Servicios para cada necesidad eléctrica`
- Lead (DEBAJO del título, no al lado): `Instalaciones, tableros y mantenimiento con trabajo prolijo y normativa SEC al día.`

| Card | Título | Texto | Tag |
|------|--------|-------|-----|
| 1 | Residencial | Instalaciones nuevas, ampliaciones, renovación de cableado y puntos de carga para casas y departamentos en Iquique y Alto Hospicio. | Hogar · Deptos |
| 2 | Comercial | Locales y oficinas: iluminación, fuerza motriz, ampliaciones de tablero y mantenimiento coordinado para no frenar tu operación. | Locales · Oficinas |
| 3 | Industrial | Tableros, puesta a tierra y mejoras eléctricas para talleres y bodegas de menor escala. | Talleres · Bodegas |
| 4 | Revisión prioritaria | Cortes, fallas o dudas de seguridad que necesitan mirada rápida. Coordinamos visita en horario hábil. | Lun–Vie |
| 5 | Iluminación | Cambio a LED, luminarias exteriores y mejoras de consumo para locales y viviendas. | LED · Ahorro |
| 6 | Certificaciones | Mediciones de puesta a tierra, TE1 y documentación para trámites municipales y entrega de obra. | SEC · Municipalidad |

- En móvil: 1 columna. Industrial y Revisión prioritaria con acento sutil (franja turquesa).
- Lead siempre debajo del H2.

### Nosotros
- Eyebrow: `Quiénes somos`
- H2: `Trabajo prolijo, trato directo`
- Lead: `Somos Conex-Iones, electricistas en Iquique y Alto Hospicio. Desde 2024 hacemos obra residencial y comercial con cableado ordenado, plazos claros y quien te cotiza es quien te responde.`
- Punto 1: `Formación en obra real` — `Experiencia en viviendas, locales y talleres. Equipo chico, coordinación directa en cada proyecto.`
- Punto 2: `Presupuesto por escrito` — `Detalle de trabajo, plazos estimados y comunicación por WhatsApp durante la ejecución.`
- Punto 3: `Cierre prolijo` — `Pruebas de funcionamiento, orden en tablero y documentación de entrega cuando el trabajo lo requiere.`
- Bloque: `Respaldo y normativa`
  - Instalaciones bajo normativa SEC
  - Presupuesto detallado por escrito
  - Cumplimiento NCh electricidad
  - Mediciones de puesta a tierra
  - Protocolo de entrega documentado
- Foto: placeholder “FOTO OBRA — EQUIPO EN CAMPO”
- Móvil: stack vertical (texto → foto → certificaciones). Lead a ancho completo de columna (sin max-width muy chico).

### Proyectos
- Eyebrow: `Obra ejecutada`
- H2: `Algunos trabajos recientes`
- Lead: `Proyectos en viviendas, locales y talleres de Iquique y Alto Hospicio. Estamos sumando fotos de obra.`
1. Featured: tag `Comercial · 2025` · `Renovación de tablero — Local en Iquique` · `Reemplazo de tablero, reorganización de circuitos y puesta a tierra. Obra en fin de semana para no interrumpir el local.`
2. Card: `Comercial` · `Iluminación LED — Local en Zofri` · `Cambio de luminarias y nuevos puntos de fuerza`
3. Card: `Residencial` · `Ampliación eléctrica — Vivienda en Alto Hospicio` · `Nuevos circuitos y puntos de carga en cocina`
- Móvil: 1 columna (featured arriba, luego las 2).

### Contacto
- Eyebrow: `Hablemos`
- H2: `Cuéntanos tu proyecto`
- Lead: `Escríbenos por WhatsApp o correo, o completa el formulario. Respondemos el mismo día hábil, de lunes a viernes.`
- Canal WhatsApp: `+56 9 8765 4321`
- Canal Email: `contacto@conex-iones.com`
- Canal Horario: `Lun–Vie 8:30–19:00`
- Form título: `Solicitar presupuesto`
- Campos: Nombre · Teléfono (placeholder `+56 9 …`) · Tipo de proyecto (Residencial / Comercial / Industrial / Urgencia / Otro) · `Cuéntanos qué necesitas` (placeholder: `Ej.: necesito ampliar el tablero de mi casa en Alto Hospicio, ¿me pueden cotizar?`)
- Botón: `Enviar consulta`
- Error form: `Completa todos los campos obligatorios.`
- Éxito form: `Consulta recibida. Te contactaremos a la brevedad.`
- Footer: `© 2026 Conex-Iones · Electricidad residencial y comercial · Iquique, Chile`
- Móvil: stack (info + canales → form → footer). WhatsApp y teléfono = misma card/número.

---

## PROMPTS POR FASE (usar uno a la vez)

### Fase 1 — Móvil: Nav + Hero
```
Continúa en 375×812. Diseña nav móvil + sección Inicio con el copy exacto del brief.
Hero: min-height 100dvh, CTAs full-width apilados, sin foto, meta abajo.
No toques otras secciones todavía.
```

### Fase 2 — Móvil: Servicios
```
En 375×812, agrega solo la sección Servicios debajo del hero.
H2 + lead apilados (lead DEBAJO del título).
6 cards en 1 columna. Copy exacto del brief.
Altura natural (no 100vh).
```

### Fase 3 — Móvil: Nosotros
```
En 375×812, agrega solo Nosotros.
Stack: texto → foto placeholder → 5 ítems de normativa.
Copy exacto. Altura natural.
```

### Fase 4 — Móvil: Proyectos
```
En 375×812, agrega solo Proyectos.
1 featured + 2 cards, columna única. Copy exacto. Altura natural.
```

### Fase 5 — Móvil: Contacto + Footer + FAB
```
En 375×812, agrega Contacto: canales + formulario + footer.
FAB WhatsApp que no tape el botón Enviar.
Copy y mensajes de form en español chileno (Completa, Cuéntanos, Escríbenos).
Altura natural.
```

### Fase 6 — Tablet 768
```
Adapta la landing YA APROBADA a 768px.
No rediseñes desde cero.
- Nav: sigue hamburger
- Servicios: 2 columnas si cabe bien
- Nosotros: texto + foto más lado a lado si cabe
- Proyectos: featured + 2 stacked o grid 2 cols
- Contacto: aún puede ir stacked
Mantén tipografía legible; no fuerces 100vh en secciones largas.
```

### Fase 7 — Desktop ≥1024 (1280 luego 1920)
```
Adapta a desktop 1280px (luego 1920) la misma landing.
- Nav horizontal + CTA “Solicitar presupuesto”
- Cada sección: height ~100dvh, una vista por pantalla
- Hero: 2 columnas (copy ~60% + foto ~40%)
- Servicios: grid 3×2; lead debajo del H2
- Nosotros: composición unificada texto+foto+certs
- Proyectos: 1 grande + 2 chicas
- Contacto: 50/50 info+form; footer integrado
No cambies copy. No uses zoom hacks. No rompas el móvil.
```

### Fase 8 — Laptop 1366×768 (opcional, al final)
```
Ajusta SOLO el breakpoint ~1366×768.
Misma distribución que Full HD, contenido compactado para caber en 100dvh por sección.
No toques 1920×1080. No uses zoom en html/main.
```

---

## Breakpoints de referencia

| Viewport | Prioridad | Altura secciones |
|----------|-----------|------------------|
| 375×812 | Primero | Hero min-height 100dvh; resto auto |
| 768×1024 | Segundo | Auto / flexible |
| 1280×800 | Tercero | ~100dvh por sección |
| 1920×1080 | Cuarto | 100dvh por sección |
| 1366×768 | Quinto | 100dvh; solo este breakpoint |

---

## Qué NO hacer

- Empezar en desktop y “adaptar” a móvil
- Forzar 100vh en Servicios/Nosotros/Proyectos/Contacto en móvil
- Voseo argentino (Completá, Contanos, necesitás, Escribinos)
- Pills, purple UI, glassmorphism exagerado, badges sobre hero
- Separar teléfono y WhatsApp en dos canales distintos
- Inventar años de experiencia o urgencias 24h
- Prompts globales “arregla todo el responsive”
- Cambiar la marca o el orden de secciones

---

## Meta (SEO)

- Title: `Conex-Iones — Electricidad en Iquique y Alto Hospicio`
- Description: `Conex-Iones: instalaciones eléctricas en Iquique y Alto Hospicio. Presupuesto sin compromiso por WhatsApp. Trabajo prolijo, normativa SEC.`

---

## Después de OpenDesign (Cursor)

1. Exportar HTML/CSS/JS
2. Verificar nav móvil (overlay, body lock, un solo nav)
3. Reemplazar WhatsApp/email reales
4. Fotos de obra
5. Formulario funcional
6. Subir a cPanel

*Brief generado desde la landing actual — julio 2026.*
