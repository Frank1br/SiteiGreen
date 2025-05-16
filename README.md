# 🌱 iGreen Site

Projeto de desenvolvimento de um site institucional moderno e funcional com blog, formulário de contato, captação de leads e área administrativa.

---

## 📁 Estrutura de Pastas

```
/igreen_site
│
├── backend/
│   ├── config/     # Arquivos de configuração (conexão com DB, sessões)
│   ├── controllers/# Lógica de negócios e controle de fluxo
│   ├── models/     # Acesso e manipulação do banco de dados
│   └── views_admin/# Telas da área administrativa
│
├── frontend/
│   ├── assets/     # CSS, JS, imagens e fontes
│   ├── components/ # Cabeçalhos, rodapés, sliders e etc.
│   ├── pages/      # Páginas públicas como Home, Contato, Blog, etc.
│   └── includes/   # Includes PHP compartilhados
```

---

## ✅ Funcionalidades

### 🔓 Área Administrativa (Admin)
- Login/logout com verificação de sessão
- Painel de controle do admin
- CRUD de posts do blog
- CRUD de categorias
- Visualização de mensagens de contato
- Visualização de leads (newsletter)
- Edição da página "Quem Somos"

### 🌐 Parte Pública (Front-end)
- Página inicial com banners e links principais
- Página "Quem Somos" dinâmica via banco de dados
- Blog com listagem e detalhamento de posts
- Formulário de contato funcional com validação e envio para o banco
- Página de captação de leads com opt-in e integração futura com ferramentas de e-mail marketing
- Sistema de comentários nos posts do blog

---

## 💾 Banco de Dados

### Nome do banco: `igreen_site_db`

Estrutura simplificada das tabelas:
- `usuarios` (login de administradores)
- `contatos` (mensagens do formulário de contato)
- `leads` (inscrição para newsletter/download)
- `categorias` (categorias do blog)
- `posts` (conteúdo do blog)
- `comentarios` (comentários em posts)
- `sobre` (conteúdo da página Quem Somos)

---

## ⚙️ Tecnologias Utilizadas

- **PHP** (sem frameworks)
- **MySQL** (phpMyAdmin)
- **HTML5 / CSS3**
- **JavaScript**
- **Bootstrap**
- **AJAX (fetch)** – para requisições assíncronas
- **Sessões PHP** – para controle de acesso ao admin

---

## 🧭 Como Executar Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/igreen_site.git
   ```

2. Crie o banco de dados `igreen_site_db` no phpMyAdmin e importe o script `estrutura_banco.sql`.

3. Configure o arquivo de conexão:
   - Caminho: `backend/config/db.php`
   - Atualize os dados de acesso ao seu banco local.

4. Inicie um servidor local:
   ```bash
   php -S localhost:8000
   ```

5. Acesse pelo navegador:
   - Frontend: http://localhost:8000/frontend/pages/home.php
   - Admin: http://localhost:8000/backend/views_admin/login_admin.php

---

## 🔐 Acesso à Área Administrativa

Login padrão (exemplo):
- Email: admin@igreen.com
- Senha: admin123 (criptografada no banco)

---

## 📦 Funcionalidades Futuras (Backlog)

- Integração com Mailchimp ou Brevo para automação de e-mails
- Upload de imagens para posts via painel
- Filtros avançados no blog
- Editor de texto enriquecido (WYSIWYG) para os posts
- Dashboard com gráficos de leads/mensagens


---

## 🧑‍💻 Desenvolvedores

- Nome: [Frank Oliveira]
- Nome: [Amanda Lima]
- GitHub: https://github.com/Frank1br
- GitHub: https://github.com/MandyLima
- Contato: frankoliveiradev@gmail.com
- Contato: 

