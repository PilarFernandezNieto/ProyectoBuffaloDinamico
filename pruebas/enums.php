<?php
enum Colors {
    case Red;
    case Blue;
    case Green;

    public function getColor(): string {
        return $this->name;
    }
}

function paintColor(Colors $colors): void {
    echo "Pintura:" . $colors->getColor();
}
paintColor(Colors::Blue);