<?php
namespace EnotasGw\V1;

class ServicosMunicipaisApi extends ApiBase
{
    /**
    * Consulta serviços municipais que podem ser utilizados para emissão de NFS-e nesta prefeitura
    * 
    * @param string $uf sigla do estado
    * @param string $cidade nome da cidade
    * @param int $pageNumber numero da página no qual a pesquisa será feita
    * @param int $pageSize quantidade de registros por página
    * @param string $termoPesquisa termo de pesquisa que será usado para pesquisar
    * @return searchResult	$listaServicosMunicipais retorna uma lista contendo os registros encontrados na pesquisa
    */
    public function consultar($uf, $cidade, $pageNumber, $pageSize, $termoPesquisa = null) 
    {
        return $this->callOperation(array(
            'path' => '/estados/{uf}/cidades/{nome}/servicos',
            'parameters' => array(
                'path' => array(
                    'uf' => $uf,
                    'nome' => $cidade
                ),
                'query' => array(
                    'pageNumber' => $pageNumber,
                    'pageSize' => $pageSize,
                    'filter' => $termoPesquisa != null ? "contains(descricao, '{$termoPesquisa}')" : null
                )
            )
        ));
    }
}
