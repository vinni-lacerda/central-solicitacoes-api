-- Banco exclusivo da suíte de testes, separado dos dados de desenvolvimento.
CREATE DATABASE IF NOT EXISTS central_solicitacoes_test
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON central_solicitacoes_test.* TO 'central'@'%';
