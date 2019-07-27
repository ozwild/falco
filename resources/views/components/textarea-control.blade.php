<div class="input-field">

    @php
        $name = isset($name) ? $name : "myField";
        $label = isset($label) ? $label : $name;
        $placeholder = isset($placeholder) ? $placeholder : null;
        $notes = isset($notes) ? $notes : null;

        /*echo html()->label($label, $name);*/

        echo html()->textarea($name)
            ->addClass('materialize-textarea')
            ->attributes([
                    'placeholder' => $placeholder,
                    'caption' => $label,
                    'rows' => 5
                ]);

        if ($notes) {
            echo html()->element('small')
                ->class('helper-text')
                ->text($notes);
        }

    @endphp


</div>
