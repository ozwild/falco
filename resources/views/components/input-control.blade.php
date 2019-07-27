<div class="input-field">

    @php
        $name = isset($name) ? $name : "myField";
        $label = isset($label) ? $label : $name;
        $placeholder = isset($placeholder) ? $placeholder : null;
        $type = isset($type) ? $type : 'text';
        $notes = isset($notes) ? $notes : null;

        /*echo html()->label($label, $name);*/

        echo html()->input($type, $name)
            ->attributes([
                'placeholder' => $placeholder,
                'caption' => $label
            ]);

        if ($notes) {
            echo html()->element('small')
                ->class('helper-text')
                ->text($notes);
        }

    @endphp


</div>
