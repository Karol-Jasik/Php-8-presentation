<?php

class Promotion
{
    public function __construct(
        public string $name,
        private DateTimeImmutable $birth_date,
        protected string $email = '',
    ) {
    }
}

class Promotion2
{
    private string $email;

    public function __construct(
        #[]
        private string $name,
        #[]
        private DateTimeImmutable $birth_date,
        #[]
        string $email,
    ) {
        $this->email = $email;
    }
}
