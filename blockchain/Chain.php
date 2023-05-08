<?php

require_once "IChain.php";

class Chain implements IChain
{
    private array $blocks;

    public function __construct()
    {
        $this->blocks = [];
    }

    public function addBlock(Block $block): static
    {
        $block->id = count($this->blocks) + 1;
        $block->dttm = date("d-M-y H:i:s");
        $block->hash = $this->calculateHash($block);
 
        $this->blocks[] = $block;
        return $this;
    }

    public function getBlock(int $id): ?Block
    {
        return $this->blocks[$id - 1];
    }

    public function getLastBlock(): ?Block
    {
        $numBlocks = count($this->blocks);
        if ($numBlocks > 0) {
            return $this->blocks[$numBlocks - 1];
        } else {
            return null;
        }
        return $this;
    }

    public function isValid(): bool
    {
        for ($i = 1; $i < count($this->blocks); $i++) {
            $currentBlock = $this->blocks[$i];
            $previousBlock = $this->blocks[$i - 1];
      
            if ($currentBlock->hash !== $currentBlock->calculateHash()) {
              return false;
            }
      
            if ($currentBlock->previous_hash !== $previousBlock->hash) {
              return false;
            }
        }
    }

    private function calculateHash(Block $block): string
    {
        return hash('md5', $block->getData());
    }
}