<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class MakeEnum extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:enum {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new enum in app/Enums with the specified name';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = Str::ucfirst($this->argument('name'));

        if (! str_ends_with($name, 'Enum')) {
            $name .= 'Enum';
        }

        $nameParts = explode('/', $name);
        $nameParts = array_slice($nameParts, 0, -1);

        $namespace = 'App\Enums';

        if (! file_exists(app_path('Enums'))) {
            mkdir(app_path('Enums'));
        }

        foreach ($nameParts as $namePart) {
            $namespace .= '\\' . $namePart;

            if (! file_exists(app_path("Enums/$namePart"))) {
                mkdir(app_path("Enums/$namePart"));
            }
        }

        $enumName = array_slice(explode('/', $name), -1)[0];

        $enumPath = app_path("Enums/$name.php");

        if (file_exists($enumPath)) {
            $this->error('Enum already exists');

            return;
        }

        $content = <<<PHP
        <?php

        namespace $namespace;

        enum $enumName: int
        {

        }

        PHP;

        $fileContent = Str::replace('{{ name }}', $enumName, $content);
        File::put($enumPath, $fileContent);

        $this->info("File '{$enumPath}' and class '{$enumName}' created successfully!");
    }

    /**
     * Prompt for missing input arguments using the returned questions.
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => 'How should this enum be called?',
        ];
    }
}
