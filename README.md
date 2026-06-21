# Sistema Jurídico de Gestão (SJG)

O **SJG** é um sistema web desenvolvido para auxiliar profissionais da área jurídica na organização e gerenciamento de informações essenciais do escritório. A plataforma permite o cadastro, consulta, edição e exclusão de dados de forma independente, proporcionando uma experiência simples, eficiente e intuitiva para o controle de clientes, processos, audiências, tarefas, contratos, agenda, relatórios e configurações.

---

## Funcionalidades

O SJG é composto por módulos independentes, permitindo a organização das principais informações jurídicas sem a necessidade de interdependência entre eles.

### Clientes

Permite o cadastro e a gestão de dados de pessoas físicas ou jurídicas.

**Campos:**

* Nome completo
* CPF ou CNPJ
* Telefone
* E-mail
* Endereço

### Processos

Gerencia o cadastro e a atualização de informações relacionadas aos processos jurídicos.

**Campos:**

* Número do processo
* Tipo (Civil, Penal, Trabalhista)
* Status (Em andamento, Arquivado, Finalizado)
* Descrição

### Audiências

Registra e organiza as audiências relacionadas aos processos jurídicos.

**Campos:**

* Título da audiência
* Tipo (Instrução, Conciliação, Julgamento)
* Data e horário
* Local
* Descrição

### Tarefas

Gerencia prazos, compromissos e atividades do dia a dia.

**Campos:**

* Título da tarefa
* Data limite
* Status (Pendente, Concluída, Atrasada)
* Descrição

### Contratos

Permite o cadastro e a gestão de contratos jurídicos.

**Campos:**

* Título do contrato
* Tipo (Honorários, Prestação de Serviços, Confidencialidade)
* Cliente (opcional)
* Data de assinatura
* Data de vencimento
* Valor
* Descrição

### Agenda

Permite o gerenciamento de compromissos, reuniões, audiências e eventos.

**Campos:**

* Título
* Data
* Horário
* Local
* Descrição

### Relatórios

Permite visualizar informações consolidadas do sistema para acompanhamento e análise das atividades jurídicas.

### Configurações

Permite personalizar e administrar parâmetros gerais do sistema, adequando-o às necessidades do escritório.

---

## Recursos Gerais

* Cadastro, edição e exclusão de registros em todos os módulos
* Interface simples e intuitiva
* Validação de dados com mensagens claras e objetivas
* Estrutura modular e independente
* Controle centralizado das informações jurídicas
* Organização de compromissos e atividades
* Emissão e visualização de relatórios

---

## Tecnologias Utilizadas

* **Backend:** Laravel (PHP)
* **Frontend:** Blade, Tailwind CSS e HTML
* **Banco de Dados:** MySQL ou PostgreSQL (Supabase)
* **Controle de Versão:** Git e GitHub

---

## Banco de Dados

O sistema pode ser utilizado tanto com **MySQL** quanto com **Supabase (PostgreSQL)**.

### Utilizando MySQL

Configure o arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sjg
DB_USERNAME=root
DB_PASSWORD=
```

### Utilizando Supabase (PostgreSQL)

1. Crie um projeto no Supabase.
2. Acesse **Project Settings → Database**.
3. Copie as credenciais de conexão.
4. Configure o arquivo `.env`:

```env
DB_CONNECTION=pgsql
DB_HOST=db.xxxxxxxxx.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=sua_senha
```

Após configurar o banco de dados, execute as migrações normalmente:

```bash
php artisan migrate
```

Caso existam seeders:

```bash
php artisan db:seed
```

---

## Instalação e Execução

Para rodar o projeto localmente:

```bash
# Clonar o repositório
git clone <repo>

# Entrar na pasta do projeto
cd <pasta_projeto>

# Instalar dependências do PHP
composer install

# Configurar o ambiente
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate

# Configurar o banco de dados (MySQL ou Supabase)

# Executar migrações
php artisan migrate

# Instalar dependências do frontend
npm install

# Compilar os assets
npm run dev

# Iniciar o servidor local
php artisan serve

A aplicação estará disponível em:

```text
http://127.0.0.1:8000
```

---

## Licença

Este projeto está licenciado sob os termos da licença MIT. Consulte o arquivo **LICENSE.md** para mais detalhes.
