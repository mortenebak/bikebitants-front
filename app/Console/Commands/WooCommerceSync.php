<?php

namespace App\Console\Commands;

use App\Business\Integration\WooCommerce\Exception\EntityNotFoundException;
use App\Business\Integration\WooCommerce\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class WooCommerceSync extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'woo:sync {--entity=*}';

    /**
     * The console command description.
     * @var string
     */
    protected $description = 'Syncronize website with wordpress data.';

    public function handle()
    {

        $entities = $this->getEntitiesToSync();
        $entities->each(function ($entityName) {

            try {
                $class = Factory::make($entityName);
                $this->info("Sync $entityName:");
                $class->import();
                $this->info('');
            } catch (EntityNotFoundException $e) {
                $this->error($e->getMessage());
            }
        });
    }

    /**
     * By default returns all entities to sync
     * @return Collection
     */
    protected function getEntitiesToSync(): Collection
    {
        $entities = $this->option('entity');

        if (!empty($entities)) {
            return collect($entities);
        }

        return collect(['Customer', 'Product', 'Category', 'Tax', 'Coupon']);
    }
}