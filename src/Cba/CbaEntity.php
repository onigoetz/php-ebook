<?php

namespace Kiwilan\Ebook\Cba;

use DateTime;

class CbaEntity
{
    /** @var string[] */
    protected array $writers = [];

    /** @var string[] */
    protected array $pencillers = [];

    /** @var string[] */
    protected array $inkers = [];

    /** @var string[] */
    protected array $colorists = [];

    /** @var string[] */
    protected array $letterers = [];

    /** @var string[] */
    protected array $coverArtists = [];

    /** @var string[] */
    protected array $editors = [];

    /** @var string[] */
    protected array $publishers = [];

    /** @var string[] */
    protected array $imprints = [];

    /** @var string[] */
    protected array $genres = [];

    /** @var string[] */
    protected array $characters = [];

    /** @var string[] */
    protected array $teams = [];

    /** @var string[] */
    protected array $locations = [];

    public function __construct(
        protected ?string $title = null,
        protected ?string $series = null,
        protected ?int $number = null,
        protected ?int $count = null,
        protected ?int $volume = null,
        protected ?string $summary = null,
        protected ?string $notes = null,
        protected ?DateTime $date = null,
        protected ?string $web = null,
        protected ?int $pageCount = null,
        protected ?string $language = null,
        protected ?string $format = null,
        protected bool $isBlackAndWhite = false,
        protected CbamMangaEnum $manga = CbamMangaEnum::NO,
        protected ?string $scanInformation = null,
        protected ?string $storyArc = null,
        protected ?string $seriesGroup = null,
        protected CbamAgeRatingEnum $ageRating = CbamAgeRatingEnum::UNKNOWN,
        protected ?float $communityRating = null, // min: 0, max: 5, digits: 2
        protected ?string $mainCharacterOrTeam = null,
        protected ?string $review = null
    ) {
    }

    /**
     * @param  string[]  $writers
     */
    public function setWriters(array $writers): void
    {
        $this->writers = $writers;
    }

    /**
     * @param  string[]  $pencillers
     */
    public function setPencillers(array $pencillers): void
    {
        $this->pencillers = $pencillers;
    }

    /**
     * @param  string[]  $inkers
     */
    public function setInkers(array $inkers): void
    {
        $this->inkers = $inkers;
    }

    /**
     * @param  string[]  $colorists
     */
    public function setColorists(array $colorists): void
    {
        $this->colorists = $colorists;
    }

    /**
     * @param  string[]  $letterers
     */
    public function setLetterers(array $letterers): void
    {
        $this->letterers = $letterers;
    }

    /**
     * @param  string[]  $coverArtists
     */
    public function setCoverArtists(array $coverArtists): void
    {
        $this->coverArtists = $coverArtists;
    }

    /**
     * @param  string[]  $editors
     */
    public function setEditors(array $editors): void
    {
        $this->editors = $editors;
    }

    /**
     * @param  string[]  $publishers
     */
    public function setPublishers(array $publishers): void
    {
        $this->publishers = $publishers;
    }

    /**
     * @param  string[]  $imprints
     */
    public function setImprints(array $imprints): void
    {
        $this->imprints = $imprints;
    }

    /**
     * @param  string[]  $genres
     */
    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @param  string[]  $characters
     */
    public function setCharacters(array $characters): void
    {
        $this->characters = $characters;
    }

    /**
     * @param  string[]  $teams
     */
    public function setTeams(array $teams): void
    {
        $this->teams = $teams;
    }

    /**
     * @param  string[]  $locations
     */
    public function setLocations(array $locations): void
    {
        $this->locations = $locations;
    }

    public function title(): ?string
    {
        return $this->title;
    }

    public function series(): ?string
    {
        return $this->series;
    }

    public function number(): ?int
    {
        return $this->number;
    }

    public function count(): ?int
    {
        return $this->count;
    }

    public function volume(): ?int
    {
        return $this->volume;
    }

    public function summary(): ?string
    {
        return $this->summary;
    }

    public function notes(): ?string
    {
        return $this->notes;
    }

    public function date(): ?DateTime
    {
        return $this->date;
    }

    public function web(): ?string
    {
        return $this->web;
    }

    public function pageCount(): ?int
    {
        return $this->pageCount;
    }

    public function language(): ?string
    {
        return $this->language;
    }

    public function format(): ?string
    {
        return $this->format;
    }

    public function isBlackAndWhite(): bool
    {
        return $this->isBlackAndWhite;
    }

    public function manga(): CbamMangaEnum
    {
        return $this->manga;
    }

    public function scanInformation(): ?string
    {
        return $this->scanInformation;
    }

    public function storyArc(): ?string
    {
        return $this->storyArc;
    }

    public function seriesGroup(): ?string
    {
        return $this->seriesGroup;
    }

    public function ageRating(): CbamAgeRatingEnum
    {
        return $this->ageRating;
    }

    public function communityRating(): ?float
    {
        return $this->communityRating;
    }

    public function mainCharacterOrTeam(): ?string
    {
        return $this->mainCharacterOrTeam;
    }

    public function review(): ?string
    {
        return $this->review;
    }

    /**
     * @return string[]
     */
    public function writers(): array
    {
        return $this->writers;
    }

    /**
     * @return string[]
     */
    public function pencillers(): array
    {
        return $this->pencillers;
    }

    /**
     * @return string[]
     */
    public function inkers(): array
    {
        return $this->inkers;
    }

    /**
     * @return string[]
     */
    public function colorists(): array
    {
        return $this->colorists;
    }

    /**
     * @return string[]
     */
    public function letterers(): array
    {
        return $this->letterers;
    }

    /**
     * @return string[]
     */
    public function coverArtists(): array
    {
        return $this->coverArtists;
    }

    /**
     * @return string[]
     */
    public function editors(): array
    {
        return $this->editors;
    }

    /**
     * @return string[]
     */
    public function publishers(): array
    {
        return $this->publishers;
    }

    /**
     * @return string[]
     */
    public function imprints(): array
    {
        return $this->imprints;
    }

    /**
     * @return string[]
     */
    public function genres(): array
    {
        return $this->genres;
    }

    /**
     * @return string[]
     */
    public function characters(): array
    {
        return $this->characters;
    }

    /**
     * @return string[]
     */
    public function teams(): array
    {
        return $this->teams;
    }

    /**
     * @return string[]
     */
    public function locations(): array
    {
        return $this->locations;
    }
}
