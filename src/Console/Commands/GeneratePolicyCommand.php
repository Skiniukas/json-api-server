<?php

namespace Swis\LaravelApi\Console\Commands;

class GeneratePolicyCommand extends BaseGenerateCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-api:generate-policy {model} {--path=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a policy for a model';

    protected $name;

    protected $overridePath;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->overridePath = $this->option('path');
        $this->overridePath();

        $this->generatePolicy();
    }

    public function getModelName()
    {
        return $this->argument('model');
    }

    public function getOverridePath()
    {
        return $this->overridePath;
    }

    public function getConfigPath()
    {
        return 'laravel_api_config.path.policy';
    }
}