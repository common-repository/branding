<?php
namespace branding\LolitaFramework\Controls\Button;

use \branding\LolitaFramework\Controls\Control;
use \branding\LolitaFramework\Core\Arr;

class Button extends Control
{
    /**
     * Render control
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return string html code.
     */
    public function render()
    {
        $this->setAttributes(
            array_merge(
                array(
                    'name'                        => $this->getName(),
                    'id'                          => $this->getId(),
                    'value'                       => $this->getValue(),
                    'type'                        => 'button',
                ),
                $this->getAttributes()
            )
        );
        return parent::render();
    }
}
