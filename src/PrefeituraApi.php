<?php
namespace EnotasGw;

class PrefeituraApi extends ApiBase
{
    /**
    * Consulta as características de uma determinada prefeitura
    * 
    *@param int codigoIbge código ibge da cidade cuja a prefeitura será consultada
    *@return mixed contendo as características da prefeitura em questão
    */
    public function consultar($codigoIbge)
    {
        return $this->callOperation(array(
            'path' => '/estados/cidades/{codigoIbge}/provedor',
            'parameters' => array(
                'path' => array(
                    'codigoIbge' => $codigoIbge
                )
            )
        ));
    }
}
