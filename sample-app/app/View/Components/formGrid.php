<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formGrid extends Component
{

    private ?string $label;
    private ?string $type;
    private ?string $pcols;
    private ?string $lcols;
    private ?string $fcols;
    private ?string $inputr;
    private ?string $inputl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        // ?string $label,?string $type,?string $pcols,?string $lcols,?string $fcols,?string $inputr,?string $inputl
        )
    {
        // $this->label = $label;
        // $this->type = $type;
        // $this->pcols = $pcols;
        // $this->lcols = $lcols;
        // $this->fcols = $fcols;
        // $this->inputr = $inputr;
        // $this->inputl = $inputl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formGrid');
    }
}
