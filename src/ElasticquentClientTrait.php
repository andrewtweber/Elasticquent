<?php

namespace Elasticquent;

trait ElasticquentClientTrait
{
    use ElasticquentConfigTrait;

    /**
     * Get OpenSearch Client
     *
     * @return \OpenSearch\Client
     */
    public function getElasticSearchClient()
    {
        $config = $this->getElasticConfig();

        return \OpenSearch\ClientBuilder::fromConfig($config);
    }

}
