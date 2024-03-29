var PMA_messages = new Array();
PMA_messages['strConfirm'] = "Confirmar";
PMA_messages['strDoYouReally'] = "Você realmente deseja executar \"%s\"?";
PMA_messages['strDropDatabaseStrongWarning'] = "Estará prestes a DESTRUIR uma base de dados completa!";
PMA_messages['strDatabaseRenameToSameName'] = "Não é possível renomear o banco de dados com o mesmo nome. Troque o nome e tente novamente";
PMA_messages['strDropTableStrongWarning'] = "Está prestes a DESTRUIR uma base de dados completa!";
PMA_messages['strTruncateTableStrongWarning'] = "Está prestes a TRUNCAR uma base de dados completa!";
PMA_messages['strDeleteTrackingData'] = "Apagar dados de tracking para esta tabela?";
PMA_messages['strDeleteTrackingDataMultiple'] = "Apagar dados de tracking para estas tabelas?";
PMA_messages['strDeleteTrackingVersion'] = "Apagar dados de tracking para esta versão?";
PMA_messages['strDeleteTrackingVersionMultiple'] = "Apagar dados de tracking para estas versões?";
PMA_messages['strDeletingTrackingEntry'] = "Apagar entrada do relatório de rastreamento?";
PMA_messages['strDeletingTrackingData'] = "Apagando dados de tracking";
PMA_messages['strDroppingPrimaryKeyIndex'] = "Apagando Chave Primária/Indice";
PMA_messages['strDroppingForeignKey'] = "Eliminando Chave estrangeira.";
PMA_messages['strOperationTakesLongTime'] = "Esta operação poderá demorar. Deseja prosseguir?";
PMA_messages['strDropUserGroupWarning'] = "Deseja realmente eliminar o grupo de utilizadores \"%s\"?";
PMA_messages['strConfirmDeleteQBESearch'] = "Deseja realmente eliminar a pesquisa \"%s\"?";
PMA_messages['strConfirmNavigation'] = "Editou alguns dados e estes não foram guardados. Tem certeza que quer sair desta página antes de guardar as alterações?";
PMA_messages['strConfirmRowChange'] = "Você está a tentar reduzir a quantidade de linhas, mas já inseriu dados nessas linhas que serão perdidas. Deseja continuar?";
PMA_messages['strDropUserWarning'] = "Deseja realmente revogar o(s) utilizador(es) selecionado(s)?";
PMA_messages['strDeleteCentralColumnWarning'] = "Deseja realmente eliminar este coluna central?";
PMA_messages['strDropRTEitems'] = "Deseja realmente eliminar os itens selecionados?";
PMA_messages['strDropPartitionWarning'] = "Deseja realmente ELIMINAR a(s) partição(ões) selecionada(s)? Isso também irá ELIMINAR os dados relacionados com a(s) partição(ões) selecionada(s)!";
PMA_messages['strTruncatePartitionWarning'] = "Deseja realmente TRUNCAR a(s) partição(ões) seleccionada(s)?";
PMA_messages['strRemovePartitioningWarning'] = "Deseja realmente remover o particionamento?";
PMA_messages['strResetSlaveWarning'] = "Deseja realmente efetuar RESET SLAVE?";
PMA_messages['strChangeColumnCollation'] = "Esta operação tentará converter os seus dados para a nova ordenação. Em casos raros, especialmente se um caractere não existir na nova ordenação, este processo poderá fazer com que os dados apareçam de forma incorrecta segundo a nova ordenação; neste caso sugerimos que retorne à ordenação original e ler os conselhos em <a href=\"%s\" target=\"garbled_data_wiki\">Informação Distorcida</a>.<br/><br/>Tem a certeza que deseja alterar os agrupamentos e converter os dados?";
PMA_messages['strChangeAllColumnCollationsWarning'] = "Através desta operação, o MySQL vai tentar mapear os dados entre duas ordenações. Se os conjuntos de caracteres forem incompatíveis, pode ocorrer perda de dados e estes dados perdidos podem <b>NÃO</b> ser recuperáveis ao reverter a operação. <b>Para converter dados existentes, é aconselhável usar os métodos de edição da(s) coluna(s) (a ligação \"Mudar\") na página da estrutura da tabela.</b><br/><br/>Tem a certeza que deseja alterar todos os agrupamentos de coluna e converter os dados?";
PMA_messages['strSaveAndClose'] = "Guardar e fechar";
PMA_messages['strReset'] = "Reiniciar";
PMA_messages['strResetAll'] = "Redefinir tudo";
PMA_messages['strFormEmpty'] = "Valor em falta no formulário!";
PMA_messages['strRadioUnchecked'] = "Selecionar pelo menos uma das opções!";
PMA_messages['strEnterValidNumber'] = "Por favor, insira um número válido!";
PMA_messages['strEnterValidLength'] = "Introduza um comprimento válido!";
PMA_messages['strAddIndex'] = "Adicionar índice";
PMA_messages['strEditIndex'] = "Editar índice";
PMA_messages['strAddToIndex'] = "Adicionar %s coluna(s) ao Índice";
PMA_messages['strCreateSingleColumnIndex'] = "Criar índice de coluna única";
PMA_messages['strCreateCompositeIndex'] = "Criar índice composto";
PMA_messages['strCompositeWith'] = "Composto com:";
PMA_messages['strMissingColumn'] = "Por favor, selecione a(s) coluna(s) para o índice.";
PMA_messages['strPreviewSQL'] = "Pré-visualizar SQL";
PMA_messages['strSimulateDML'] = "Simular pesquisa";
PMA_messages['strMatchedRows'] = "Linhas que correspondem:";
PMA_messages['strSQLQuery'] = "Comando SQL:";
PMA_messages['strYValues'] = "Valores para Y";
PMA_messages['strEmptyQuery'] = "Por favor, introduza primeiro a consulta SQL.";
PMA_messages['strHostEmpty'] = "O nome do hospedeiro está vazio!";
PMA_messages['strUserEmpty'] = "O nome do utilizador está vazio!";
PMA_messages['strPasswordEmpty'] = "A palavra-passe está em branco!";
PMA_messages['strPasswordNotSame'] = "As palavras-passe são diferentes!";
PMA_messages['strRemovingSelectedUsers'] = "Remover Utilizadores Selecionados";
PMA_messages['strClose'] = "Fechar";
PMA_messages['strTemplateCreated'] = "O modelo foi criado.";
PMA_messages['strTemplateLoaded'] = "O modelo foi carregado.";
PMA_messages['strTemplateUpdated'] = "O modelo foi atualizado.";
PMA_messages['strTemplateDeleted'] = "O modelo foi eliminado.";
PMA_messages['strOther'] = "Outros";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "Ligações / Processos";
PMA_messages['strIncompatibleMonitorConfig'] = "Configuração local do monitor incompatível!";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "As configurações da tabela de armazenamento local do seu browser já não são compatíveis com a nova versão do monitor de diálogos. É provável que a sua configuração actual deixe de funcionar. Por favor, reinicie as suas configurações no menu <i>Configurações</i>.";
PMA_messages['strQueryCacheEfficiency'] = "Eficiência da cache de comandos";
PMA_messages['strQueryCacheUsage'] = "Utilização da cache de comandos";
PMA_messages['strQueryCacheUsed'] = "Cache de comandos utilizada";
PMA_messages['strSystemCPUUsage'] = "Utilização da CPU do Sistema";
PMA_messages['strSystemMemory'] = "Memória do sistema";
PMA_messages['strSystemSwap'] = "Troca do sistema";
PMA_messages['strAverageLoad'] = "Carga média";
PMA_messages['strTotalMemory'] = "Memória total";
PMA_messages['strCachedMemory'] = "Memória na cache";
PMA_messages['strBufferedMemory'] = "Memória no buffer";
PMA_messages['strFreeMemory'] = "Memória livre";
PMA_messages['strUsedMemory'] = "Memória utilizada";
PMA_messages['strTotalSwap'] = "Swap total";
PMA_messages['strCachedSwap'] = "swap retida (em cache)";
PMA_messages['strUsedSwap'] = "Swap usado";
PMA_messages['strFreeSwap'] = "Limpar swap";
PMA_messages['strBytesSent'] = "Bytes enviados";
PMA_messages['strBytesReceived'] = "Bytes recebidos";
PMA_messages['strConnections'] = "Ligações";
PMA_messages['strProcesses'] = "Processos";
PMA_messages['strB'] = "Bytes";
PMA_messages['strKiB'] = "KB";
PMA_messages['strMiB'] = "MB";
PMA_messages['strGiB'] = "GB";
PMA_messages['strTiB'] = "TB";
PMA_messages['strPiB'] = "PB";
PMA_messages['strEiB'] = "EB";
PMA_messages['strNTables'] = "%d tabela(s)";
PMA_messages['strQuestions'] = "Perguntas";
PMA_messages['strTraffic'] = "Tráfego";
PMA_messages['strSettings'] = "Configurações";
PMA_messages['strAddChart'] = "Adicionar gráfico a grelha";
PMA_messages['strAddOneSeriesWarning'] = "Por favor, adicione pelo menos uma variável às series!";
PMA_messages['strNone'] = "Nenhum";
PMA_messages['strResumeMonitor'] = "Resumir o monitor";
PMA_messages['strPauseMonitor'] = "Pausar o monitor";
PMA_messages['strStartRefresh'] = "Iniciar atualização automática";
PMA_messages['strStopRefresh'] = "Parar atualização automática";
PMA_messages['strBothLogOn'] = "general_log e slow_query estão ativos.";
PMA_messages['strGenLogOn'] = "general_log está ativo.";
PMA_messages['strSlowLogOn'] = "slow_query_log está ativo.";
PMA_messages['strBothLogOff'] = "slow_query_log e general_log estão desativados.";
PMA_messages['strLogOutNotTable'] = "log_output não está configurado para a TABELA.";
PMA_messages['strLogOutIsTable'] = "\"log_output\" está definido para a TABELA.";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "slow_query_log está ativo, mas o servidor só regista comandos que demorem mais de %d segundos. É recomendado definir long_query_time para 0-2 segundos, dependendo do seu sistema.";
PMA_messages['strLongQueryTimeSet'] = "long_query_time está configurado para %d segundo(s).";
PMA_messages['strSettingsAppliedGlobal'] = "As seguintes configurações vão ser aplicadas globalmente e redefinidas para o valor predefinição após o reinicio do servidor:";
PMA_messages['strSetLogOutput'] = "Define log_output como %s";
PMA_messages['strEnableVar'] = "Ativar %s";
PMA_messages['strDisableVar'] = "Desativar %s";
PMA_messages['setSetLongQueryTime'] = "Definir \"long_query_time\" para %d segundos.";
PMA_messages['strNoSuperUser'] = "Não pode modificar estas variáveis. Por favor faça login como root ou contacte o seu administrador de base de dados.";
PMA_messages['strChangeSettings'] = "Alterar configurações";
PMA_messages['strCurrentSettings'] = "Configurações atuais";
PMA_messages['strChartTitle'] = "Título do gráfico";
PMA_messages['strDifferential'] = "Diferencial";
PMA_messages['strDividedBy'] = "Dividido por %s";
PMA_messages['strUnit'] = "Unidade";
PMA_messages['strFromSlowLog'] = "Do registo lento";
PMA_messages['strFromGeneralLog'] = "Do registo geral";
PMA_messages['strServerLogError'] = "O nome da base de dados não é reconhecido por esta consulta nos registos do servidor.";
PMA_messages['strAnalysingLogsTitle'] = "A analisar os registos";
PMA_messages['strAnalysingLogs'] = "A analisar e a carregar registos. Isto pode demorar um um pouco.";
PMA_messages['strCancelRequest'] = "Cancelar pedido";
PMA_messages['strCountColumnExplanation'] = "Esta coluna mostra a quantidade de consultas idênticas que são agrupadas juntas. No entanto, apenas a consulta SQL em si foi usada como um critério de agrupamento, por isso os outros atributos de consultas, tais como horário de início, podem ser diferentes.";
PMA_messages['strMoreCountColumnExplanation'] = "Uma vez que o agrupamento de consultas INSERT foi selecionado, consultas INSERT na mesma tabela também são agrupadas juntas, independentemente dos dados inseridos.";
PMA_messages['strLogDataLoaded'] = "Dados do registo carregados. Comandos executados neste período de tempo:";
PMA_messages['strJumpToTable'] = "Saltar para a tabela de registos";
PMA_messages['strNoDataFoundTitle'] = "Dados não encontrados";
PMA_messages['strNoDataFound'] = "Registo analisado, mas não foram encontrados dados neste período de tempo.";
PMA_messages['strAnalyzing'] = "Em análise…";
PMA_messages['strExplainOutput'] = "Explicar SQL";
PMA_messages['strStatus'] = "Estado";
PMA_messages['strTime'] = "Tempo";
PMA_messages['strTotalTime'] = "Tempo Total:";
PMA_messages['strProfilingResults'] = "Resultado(s) da(s) consulta(s)";
PMA_messages['strTable'] = "Tabela";
PMA_messages['strChart'] = "Mapa de Resultados";
PMA_messages['strAliasDatabase'] = "Base de Dados";
PMA_messages['strAliasTable'] = "Tabela";
PMA_messages['strAliasColumn'] = "Coluna";
PMA_messages['strFiltersForLogTable'] = "Opções de filtragem da tabela de registos";
PMA_messages['strFilter'] = "Filtrar";
PMA_messages['strFilterByWordRegexp'] = "Filtrar comandos por palavra/regexp:";
PMA_messages['strIgnoreWhereAndGroup'] = "Agrupar comandos, ignorando dados variáveis em clausulas WHERE";
PMA_messages['strSumRows'] = "Soma de linhas agrupadas:";
PMA_messages['strTotal'] = "Total:";
PMA_messages['strLoadingLogs'] = "Carregando registos";
PMA_messages['strRefreshFailed'] = "Falhou a atualização do monitor";
PMA_messages['strInvalidResponseExplanation'] = "Ao pedir novos dados do gráfico o servidor retornou uma resposta inválida. Isto é provavelmente porque a sua sessão expirou. Atualizar a página e reinserir as suas credenciais deve ajudar.";
PMA_messages['strReloadPage'] = "Atualizar página";
PMA_messages['strAffectedRows'] = "Linhas afetadas:";
PMA_messages['strFailedParsingConfig'] = "Falha ao processar ficheiro de configuração. Não parece ser código JSON válido.";
PMA_messages['strFailedBuildingGrid'] = "Falha ao construir grelha do gráfico com a configuração importada. Redefinindo os valores de predefinição…";
PMA_messages['strImport'] = "Importar";
PMA_messages['strImportDialogTitle'] = "Importar configuração do monitor";
PMA_messages['strImportDialogMessage'] = "Seleccione o ficheiro que pretende importar.";
PMA_messages['strNoImportFile'] = "Não existem ficheiros disponíveis para importar no servidor!";
PMA_messages['strAnalyzeQuery'] = "Analisar pedido";
PMA_messages['strAdvisorSystem'] = "Sistema de Assessoria";
PMA_messages['strPerformanceIssues'] = "Possíveis problemas de desempenho";
PMA_messages['strIssuse'] = "Problemas";
PMA_messages['strRecommendation'] = "Recomendação";
PMA_messages['strRuleDetails'] = "Detalhes da regra";
PMA_messages['strJustification'] = "Justificação";
PMA_messages['strFormula'] = "Variável / formula utilizada";
PMA_messages['strTest'] = "Teste";
PMA_messages['strFormatting'] = "Formatando SQL…";
PMA_messages['strNoParam'] = "Parâmetros não encontrados!";
PMA_messages['strGo'] = "Executar";
PMA_messages['strCancel'] = "Cancelar";
PMA_messages['strPageSettings'] = "Configurações relacionadas com a página";
PMA_messages['strApply'] = "Aplicar";
PMA_messages['strLoading'] = "Carregando…";
PMA_messages['strAbortedRequest'] = "Pedido anulado!!";
PMA_messages['strProcessingRequest'] = "Processando o pedido";
PMA_messages['strRequestFailed'] = "Pedido falhou!!";
PMA_messages['strErrorProcessingRequest'] = "Erro ao processar pedido";
PMA_messages['strErrorCode'] = "Código de erro: %s";
PMA_messages['strErrorText'] = "Texto do erro: %s";
PMA_messages['strErrorConnection'] = "Parece que se perdeu a conexão ao servidor. Por favor, verifique a conectividade da sua rede e o estado do seu servidor.";
PMA_messages['strNoDatabasesSelected'] = "Nenhuma base de dados selecionada.";
PMA_messages['strNoAccountSelected'] = "Nenhuma conta selecionada.";
PMA_messages['strDroppingColumn'] = "Apagando Coluna";
PMA_messages['strAddingPrimaryKey'] = "Adicionando chave primária";
PMA_messages['strOK'] = "OK";
PMA_messages['strDismiss'] = "Clique para fechar esta notificação";
PMA_messages['strRenamingDatabases'] = "Renomeando Bases de Dados";
PMA_messages['strCopyingDatabase'] = "Copiando Base de Dados";
PMA_messages['strChangingCharset'] = "Mudando mapa de caracteres";
PMA_messages['strNo'] = "Não";
PMA_messages['strForeignKeyCheck'] = "Ativa a verificação de chaves estrangeiras";
PMA_messages['strErrorRealRowCount'] = "Falha na leitura da quantidade real de linhas.";
PMA_messages['strSearching'] = "Pesquisando";
PMA_messages['strHideSearchResults'] = "Esconder resultados da pesquisa";
PMA_messages['strShowSearchResults'] = "Mostrar resultados da pesquisa";
PMA_messages['strBrowsing'] = "Navegação";
PMA_messages['strDeleting'] = "A Eliminar";
PMA_messages['strConfirmDeleteResults'] = "Apagar os semelhantes para a %s tabela?";
PMA_messages['MissingReturn'] = "A definição de uma função armazenada deve conter uma instrução RETURN!";
PMA_messages['strExport'] = "Exportar";
PMA_messages['NoExportable'] = "Nenhuma rotina é exportável. Privilégios necessários podem estar faltando.";
PMA_messages['enum_editor'] = "Editor ENUM/SET";
PMA_messages['enum_columnVals'] = "Valores para a coluna \"%s\"";
PMA_messages['enum_newColumnVals'] = "Valores para a nova coluna";
PMA_messages['enum_hint'] = "Introduza cada valor num campo separado.";
PMA_messages['enum_addValue'] = "Add %d valor(es)";
PMA_messages['strImportCSV'] = "Nota: se o ficheiro contém várias tabelas, estas serão combinadas numa.";
PMA_messages['strHideQueryBox'] = "Esconder Caixa do query";
PMA_messages['strShowQueryBox'] = "Mostrar Caixa do query";
PMA_messages['strEdit'] = "Edita";
PMA_messages['strDelete'] = "Apagar";
PMA_messages['strNotValidRowNumber'] = "%d não é um número de linha válido.";
PMA_messages['strBrowseForeignValues'] = "Visualizar valores estrangeiros";
PMA_messages['strNoAutoSavedQuery'] = "Nenhuma consulta salva automaticamente";
PMA_messages['strBookmarkVariable'] = "Variável %d:";
PMA_messages['pickColumn'] = "Selecione";
PMA_messages['pickColumnTitle'] = "Selector de colunas";
PMA_messages['searchList'] = "Pesquisar nesta lista";
PMA_messages['strEmptyCentralList'] = "Não existem colunas na lista central. Assegure-se de que a lista de colunas central para a base de dados %s contém colunas que não estão presentes na tabela corrente.";
PMA_messages['seeMore'] = "Ver mais";
PMA_messages['confirmTitle'] = "Tem a certeza?";
PMA_messages['makeConsistentMessage'] = "Esta acção pode modificar as definições de algumas colunas\n<br/>Tem a certeze que quer continuar?";
PMA_messages['strContinue'] = "Continuar";
PMA_messages['strAddPrimaryKey'] = "Adicionar chave primária";
PMA_messages['strPrimaryKeyAdded'] = "Chave primária adicionada.";
PMA_messages['strToNextStep'] = "Continuando para a próxima forma…";
PMA_messages['strFinishMsg'] = "A primeira forma de normalização da tabela \'%s\' foi concluída.";
PMA_messages['strEndStep'] = "Fim da forma de normalização";
PMA_messages['str2NFNormalization'] = "Segunda forma de normalização (2NF)";
PMA_messages['strDone'] = "Concluído";
PMA_messages['strConfirmPd'] = "Confirme as dependências parciais";
PMA_messages['strSelectedPd'] = "Dependênciais parciais selecionadas:";
PMA_messages['strPdHintNote'] = "Nota: a, b -> d,f implica que os valores das colunas a e b combinadas podem determinar os valores das colunas d e f.";
PMA_messages['strNoPdSelected'] = "Nenhuma dependência parcial selecionada!";
PMA_messages['strBack'] = "Voltar";
PMA_messages['strShowPossiblePd'] = "Mostrar possíveis dependênciais parciais baseando nos dados da tabela";
PMA_messages['strHidePd'] = "Ocultar lista de dependências parciais";
PMA_messages['strWaitForPd'] = "Aguarde uns instantes! Isto poderá demorar alguns segundos dependendo do tamanho dos dados e da quantidade de colunas da tabela.";
PMA_messages['strStep'] = "Passo";
PMA_messages['strMoveRepeatingGroup'] = "<ol><b>As seguintes ações serão executadas:</b><li>DROP colunas %s da tabela %s</li><li>Criar a próxima tabela</li>";
PMA_messages['strNewTablePlaceholder'] = "Enter new table name";
PMA_messages['strNewColumnPlaceholder'] = "Enter column name";
PMA_messages['str3NFNormalization'] = "Terceira forma de normalização (3NF)";
PMA_messages['strConfirmTd'] = "Confirme as dependências transitivas";
PMA_messages['strSelectedTd'] = "Dependências selecionadas:";
PMA_messages['strNoTdSelected'] = "Nenhuma dependência selecionada!";
PMA_messages['strSave'] = "Guarda";
PMA_messages['strHideSearchCriteria'] = "Esconder critérios de buca";
PMA_messages['strShowSearchCriteria'] = "Mostrar critérios de pesquisa";
PMA_messages['strRangeSearch'] = "Pesquisa por intervalo";
PMA_messages['strColumnMax'] = "Máximo de colunas:";
PMA_messages['strColumnMin'] = "Mínimo de colunas:";
PMA_messages['strMinValue'] = "Valor mínimo:";
PMA_messages['strMaxValue'] = "Valor máximo:";
PMA_messages['strHideFindNReplaceCriteria'] = "Esconder critérios de localizar e substituir";
PMA_messages['strShowFindNReplaceCriteria'] = "Mostrar critérios de localizar e substituir";
PMA_messages['strDisplayHelp'] = "<ul><li>Cada ponto representa um registo (linha) de dados.</li><li>Colocar o cursor por cima de um ponto irá mostrar a sua legenda.</li><li>Para ampliar, selecione uma area do gráfico com o rato.</li><li>Clique no botão Reset Zoom para voltar ao estado original.</li><li>Clique num ponto de dados para ver e possivelmente editar a linha de dados.</li><li>O plano pode ser redimensionado arrastando-o ao longo do canto inferior direito.</li></ul>";
PMA_messages['strHelpTitle'] = "Zoom search instructions";
PMA_messages['strInputNull'] = "<strong>Seleccione duas colunas</strong>";
PMA_messages['strSameInputs'] = "<strong>Seleccione duas colunas diferentes</strong>";
PMA_messages['strDataPointContent'] = "Conteúdo do ponto de dados";
PMA_messages['strIgnore'] = "Ignora";
PMA_messages['strCopy'] = "Copiar";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "Ponto";
PMA_messages['strPointN'] = "Ponto %d";
PMA_messages['strLineString'] = "Segmento de Reta";
PMA_messages['strPolygon'] = "Polígono";
PMA_messages['strGeometry'] = "Geometria";
PMA_messages['strInnerRing'] = "Anel Interno";
PMA_messages['strOuterRing'] = "Anel exterior";
PMA_messages['strAddPoint'] = "Adicionar um ponto";
PMA_messages['strAddInnerRing'] = "Adicionar um anel interior";
PMA_messages['strYes'] = "Sim";
PMA_messages['strCopyEncryptionKey'] = "Deseja copiar a chave de encriptação?";
PMA_messages['strEncryptionKey'] = "Chave de encriptação";
PMA_messages['strMysqlAllowedValuesTipTime'] = "O MySQL aceita valores adicionais não selecionáveis através da barra deslizante; Digite estes valores diretamente, se desejado";
PMA_messages['strMysqlAllowedValuesTipDate'] = "O MySQL aceita valores adicionais não selecionáveis através do datepicker; Digite estes valores diretamente, se desejado";
PMA_messages['strLockToolTip'] = "Indica que foram feitas mudanças nesta página; Será pedida confirmação antes de abandonar as mudanças";
PMA_messages['strSelectReferencedKey'] = "Seleccione chave de referencia";
PMA_messages['strSelectForeignKey'] = "Seleccione Foreign Key";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "Seleccione a chave primária ou uma chave única!";
PMA_messages['strChangeDisplay'] = "Escolha a coluna para mostrar";
PMA_messages['strLeavingDesigner'] = "Não salvou as mudanças no layout. Estas serão perdidas se não as guardar. Deseja continuar?";
PMA_messages['strQueryEmpty'] = "valor/sobconsulta está vazio";
PMA_messages['strAddTables'] = "Adicione tabelas de outras bases de dados";
PMA_messages['strPageName'] = "Nome da página";
PMA_messages['strSavePage'] = "Guardar página";
PMA_messages['strSavePageAs'] = "Salvar página como";
PMA_messages['strOpenPage'] = "Abrir página";
PMA_messages['strDeletePage'] = "Eliminar página";
PMA_messages['strUntitled'] = "Sem título";
PMA_messages['strSelectPage'] = "Selecione uma página para continuar";
PMA_messages['strEnterValidPageName'] = "Introduza um nome de página válido";
PMA_messages['strLeavingPage'] = "Deseja guardar as alterações à página atual?";
PMA_messages['strSuccessfulPageDelete'] = "Página eliminada com sucesso";
PMA_messages['strExportRelationalSchema'] = "Exporta o esquema relacional (schema)";
PMA_messages['strModificationSaved'] = "Modificações foram guardadas";
PMA_messages['strAddOption'] = "Adiciona uma opção para a coluna \"%s\".";
PMA_messages['strObjectsCreated'] = "%d objecto(s) criado(s).";
PMA_messages['strSubmit'] = "Submete";
PMA_messages['strCellEditHint'] = "Carregue em ESC para cancelar a edição.";
PMA_messages['strSaveCellWarning'] = "Editou alguns dados e estes não foram salvos. Tem certeza que quer sair desta página antes de salvar os seus dados?";
PMA_messages['strColOrderHint'] = "Arraste para re-ordenar.";
PMA_messages['strSortHint'] = "Clica para ordenar resultados por esta coluna.";
PMA_messages['strMultiSortHint'] = "Shift+Click para adicionar esta coluna à cláusula ORDER BY ou para alternar entre ASC/DESC.<br />-Ctrl+Click ou Alt+Click (Mac: Shift+Option+Click) para remover a coluna da cláusula ORDER BY";
PMA_messages['strColMarkHint'] = "Clique para seleccionar/rejeitar.";
PMA_messages['strColNameCopyHint'] = "Duplo-clique para copiar o nome da coluna.";
PMA_messages['strColVisibHint'] = "Clique na seta<br />para alternar a visibilidade da coluna.";
PMA_messages['strShowAllCol'] = "Mostrar tudo";
PMA_messages['strAlertNonUnique'] = "Esta tabela não contém uma coluna exclusiva. Funções relacionados com a edição da tabela, checkbox, Editar, Copiar e Eliminar links podem não funcionar depois de guardar.";
PMA_messages['strEnterValidHex'] = "Por favor introduza uma cadeia hexadecimal válida. Os caracteres válidos são 0-9, A-F.";
PMA_messages['strShowAllRowsWarning'] = "Deseja realmente ver todas as linhas? Grandes tabelas poderão crashar o navegador.";
PMA_messages['strOriginalLength'] = "Comprimento original";
PMA_messages['dropImportMessageCancel'] = "cancelar";
PMA_messages['dropImportMessageAborted'] = "Abortado";
PMA_messages['dropImportMessageFailed'] = "Falhou";
PMA_messages['dropImportMessageSuccess'] = "Sucesso";
PMA_messages['dropImportImportResultHeader'] = "Importar estado";
PMA_messages['dropImportDropFiles'] = "Largue ficheiros aqui";
PMA_messages['dropImportSelectDB'] = "Primeiro selecione a base de dados";
PMA_messages['print'] = "Imprimir";
PMA_messages['back'] = "Voltar";
PMA_messages['strGridEditFeatureHint'] = "Também pode editar a maioria dos valores<br />com um duplo clique no valor a alterar.";
PMA_messages['strGoToLink'] = "Ir para link:";
PMA_messages['strColNameCopyTitle'] = "Copiar nome da coluna.";
PMA_messages['strColNameCopyText'] = "Clique com o botão direito do rato para copiar para a área de transferência.";
PMA_messages['strGeneratePassword'] = "Gerar palavra-passe";
PMA_messages['strGenerate'] = "Gerar";
PMA_messages['strChangePassword'] = "Alterar a palavra-passe";
PMA_messages['strMore'] = "Mais";
PMA_messages['strShowPanel'] = "Mostrar Painel";
PMA_messages['strHidePanel'] = "Esconder painel";
PMA_messages['strUnhideNavItem'] = "Mostrar items de navegação escondidos da árvore.";
PMA_messages['linkWithMain'] = "Conectar com o painel principal";
PMA_messages['unlinkWithMain'] = "Desconectar do painel principal";
PMA_messages['strInvalidPage'] = "A página requisitada não foi encontrada no histórico, pode ter expirado.";
PMA_messages['strNewerVersion'] = "Uma nova versão do phpMyAdmin está disponível e deverá proceder à actualização. A nova versão é %s, e foi lançada em %s.";
PMA_messages['strLatestAvailable'] = ", última versão estável:";
PMA_messages['strUpToDate'] = "atualizada";
PMA_messages['strCreateView'] = "Criar visualização";
PMA_messages['strSendErrorReport'] = "Enviar relatório de erro";
PMA_messages['strSubmitErrorReport'] = "Enviar relatório de erro";
PMA_messages['strErrorOccurred'] = "Ocorreu um erro fatal de JavaScript. Pretende enviar um relatório de erro?";
PMA_messages['strChangeReportSettings'] = "Alterar as definições dos relatórios";
PMA_messages['strShowReportDetails'] = "Mostrar os detalhes do relatório";
PMA_messages['strTimeOutError'] = "Exportação incompleta devido a um limite de tempo de execução baixo a nível do PHP!";
PMA_messages['strTooManyInputs'] = "Aviso: um formulário desta página tem mais que %d campos. Ao submeter, alguns dos campos podem ser ignorados, devido à configuração do PHP max_input_vars.";
PMA_messages['phpErrorsFound'] = "<div class=\"error\">Foram detectados alguns erros no servidor!<br/>Por favor olhe para a parte inferior desta janela.<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"Ignora\" class=\"floatright message_errors_found\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"Ignorar tudo\" class=\"floatright message_errors_found\"></div></div>";
PMA_messages['phpErrorsBeingSubmitted'] = "<div class=\"error\">Foram detectados alguns erros no servidor!<br/>As suas definições estão agora a ser submetidas, por favor aguarde.<br/><img src=\"./themes/pmahomme/img/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"/></div>";
PMA_messages['strConsoleRequeryConfirm'] = "Executar consulta novamente?";
PMA_messages['strConsoleDeleteBookmarkConfirm'] = "Deseja realmente eliminar este marcador?";
PMA_messages['strConsoleDebugError'] = "Algum erro ocorreu ao carregar a informação de debug do SQL.";
PMA_messages['strConsoleDebugSummary'] = "%s querys executadas %s vezes em %s segundos.";
PMA_messages['strConsoleDebugArgsSummary'] = "%s argumento(s) passado(s)";
PMA_messages['strConsoleDebugShowArgs'] = "Mostrar argumentos";
PMA_messages['strConsoleDebugHideArgs'] = "Ocultar argumentos";
PMA_messages['strConsoleDebugTimeTaken'] = "Tempo gasto:";
PMA_messages['strNoLocalStorage'] = "Houve um erro ao acessar o armazenamento do seu browser. Algumas funcionalidades podem não funcionar corretamente para você. É provável que o browser não suporte armazenamento ou que a quota limite tenha sido alcançada. No Firefox, armazenamento corrompido também pode causar um problema. Limpar seus \"Dados offline de sites\" pode ajudar. No Safari, este problema é comumente causado pelo \"Modo de Navegação Privada\".";
PMA_messages['strCopyTablesTo'] = "Copiar tabelas para";
PMA_messages['strAddPrefix'] = "Adicionar prefixo à tabela";
PMA_messages['strReplacePrefix'] = "Substituir tabela com prefixo";
PMA_messages['strCopyPrefix'] = "Copiar tabela com prefixo";
PMA_messages['strExtrWeak'] = "Extremamente fraco";
PMA_messages['strVeryWeak'] = "Muito fraco";
PMA_messages['strWeak'] = "Fraco";
PMA_messages['strGood'] = "Bom";
PMA_messages['strStrong'] = "Forte";
PMA_messages['strU2FTimeout'] = "Acabou o tempo de espera para a chave segura de activação.";
PMA_messages['strU2FError'] = "Falhou a activação com chave segura (%s).";
PMA_messages['strTableAlreadyExists'] = "A tabela %s já existe!";
PMA_messages['strHide'] = "Esconder";
PMA_messages['strStructure'] = "Estrutura";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var mysql_doc_template = './url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html';
var maxInputVars = 1000;
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "Concluído";
$.datepicker.regional['']['prevText'] = "Ant";
$.datepicker.regional['']['nextText'] = "Próx";
$.datepicker.regional['']['currentText'] = "Hoje";
$.datepicker.regional['']['monthNames'] = ["Janeiro","Fevereiro","Março","Abril","Mai","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro",];
$.datepicker.regional['']['monthNamesShort'] = ["Jan","Fev","Mar","Abr","Maio","Jun","Jul","Ago","Set","Out","Nov","Dez",];
$.datepicker.regional['']['dayNames'] = ["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado",];
$.datepicker.regional['']['dayNamesShort'] = ["Domingo","Seg","Ter","Qua","Qui","Sex","Sab",];
$.datepicker.regional['']['dayNamesMin'] = ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb",];
$.datepicker.regional['']['weekHeader'] = "Sem";
$.datepicker.regional['']['showMonthAfterYear'] = false;
$.datepicker.regional['']['yearSuffix'] = "Nenhum";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "Tempo";
$.timepicker.regional['']['hourText'] = "Hora";
$.timepicker.regional['']['minuteText'] = "Minuto";
$.timepicker.regional['']['secondText'] = "Segundo";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */

function extendingValidatorMessages() {
$.extend($.validator.messages, {
required: "Este campo é obrigatório", remote: "Por favor, corrija este campo", email: "Por favor, digite um e-mail válido", url: "Por favor, digite uma URL válida", date: "Por favor, digite uma data válida", dateISO: "Por favor, digite uma data (ISO) válida", number: "Por favor, digite um número válido", creditcard: "Por favor, digite um número de cartão de crédito válido", digits: "Por favor, utilize somente dígitos", equalTo: "Por favor, digite o mesmo valor novamente", maxlength: $.validator.format("Por favor, digite no máximo {0} caracteres"), minlength: $.validator.format("Por favor, digite no mínimo {0} caracteres"), rangelength: $.validator.format("Por favor, digite um valor entre {0} e {1} caracteres de comprimento"), range: $.validator.format("Por Favor, digite um valor entre {0} e {1}"), max: $.validator.format("Por favor, digite um valor menor ou igual a {0}"), min: $.validator.format("Por favor, digite um valor maior ou igual a {0}"), validationFunctionForDateTime: $.validator.format("Por favor, digite uma data ou hora válida"), validationFunctionForHex: $.validator.format("Por favor, digite um valor HEX válido"), validationFunctionForFuns: $.validator.format("Erro")
});
} /* if ($.validator) */