<?php


namespace BitPanda\Repositories;


use BitPanda\Repositories\Transactions\TransactionsDataSourceManager;

class DataSourceFactoryResolver
{
    private array $sources = [
        'mysql',
        'csv'
    ];

    private TransactionsDataSourceManager $dataSourceManager;

    public function __construct(TransactionsDataSourceManager $dataSourceManager)
    {
        $this->dataSourceManager = $dataSourceManager;
    }

    /**
     * @throws NotAValidDataSourceException
     */
    public function make(string $preferredSource = 'mysql')
    {
        if (in_array($preferredSource, $this->sources, true) === false) {
            throw new NotAValidDataSourceException("There is no valid data source of type {$preferredSource}");
        }

        return $this->dataSourceManager->driver($preferredSource);
    }
}
