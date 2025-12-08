# Sistema Jurídico de Gestão (SJG)

O **SJG** é um sistema web simples e eficiente, criado para ajudar profissionais da área jurídica a organizarem suas rotinas de forma clara e objetiva. O sistema permite o cadastro, consulta, edição e exclusão de informações importantes de forma independente, facilitando o gerenciamento de clientes, processos, audiências, tarefas e contratos.

---

## Funcionalidades

O SJG é composto por módulos independentes, permitindo a organização das principais informações jurídicas sem a necessidade de interdependência entre eles.  

### Clientes
Permite o cadastro e gestão de dados de pessoas físicas ou jurídicas.  
**Campos:**
- Nome completo  
- CPF ou CNPJ  
- Telefone  
- E-mail  
- Endereço  

### Processos
Gerencia o cadastro e a atualização de informações relacionadas aos processos jurídicos.  
**Campos:**
- Número do processo  
- Tipo (Civil, Penal, Trabalhista)  
- Status (Em andamento, Arquivado, Finalizado)  
- Descrição  

### Audiências
Registra e organiza as audiências relacionadas aos processos jurídicos.  
**Campos:**
- Título da audiência  
- Tipo (Instrução, Conciliação, Julgamento)  
- Data e horário  
- Local  
- Descrição  

### Tarefas
Gerencia prazos, compromissos e ações do dia a dia.  
**Campos:**
- Título da tarefa  
- Data limite  
- Status (Pendente, Concluída, Atrasada)  
- Descrição  

### Contratos
Permite o cadastro e a gestão de contratos jurídicos vinculados ou não a clientes/processos.  
**Campos:**
- Título do contrato  
- Tipo (Honorários, Prestação de Serviços, Confidencialidade)  
- Cliente (opcional)  
- Data de assinatura  
- Data de vencimento  
- Valor  
- Descrição  

---

## Recursos Gerais

- Cadastro, edição e exclusão de registros nos módulos de Clientes, Processos, Audiências, Tarefas e Contratos  
- Interface simples e intuitiva, focada na experiência do usuário  
- Validação de dados com mensagens de erro claras e objetivas  
- Estrutura independente entre os módulos, sem dependências entre os cadastros  

---

## Tecnologias Utilizadas

- **Backend:** Laravel (PHP)  
- **Frontend:** Blade, tailwind e HTML
- **Banco de Dados:** MySQL 
- **Controle de Versão:** Git, GitHub  

---

## Instalação e Execução

Para rodar o projeto localmente, siga os passos abaixo:

```bash
# Clonar o repositório
git clone <repo>

# Entrar na pasta do projeto
cd <pasta_projeto>

# Instalar dependências do PHP
composer install

# Configurar o arquivo de ambiente
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate

# Executar migrações do banco de dados
php artisan migrate

# Instalar dependências do frontend
npm install

# Compilar os assets
npm run dev   # ou npm run build

# Iniciar o servidor local
php artisan serve

# Criar o link público para arquivos enviados
php artisan storage:link   # (necessário para acessar documentos)
```

---

## Licença

Este projeto está licenciado sob os termos da licença MIT. Consulte o arquivo **LICENSE.md** para mais detalhes.
