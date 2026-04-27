<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

enum MergeVideoTransition: string
{
    case None = 'none';
    case Fade = 'fade';
    case Fadeblack = 'fadeblack';
    case Fadewhite = 'fadewhite';
    case Dissolve = 'dissolve';
    case Wipeleft = 'wipeleft';
    case Wiperight = 'wiperight';
    case Wipeup = 'wipeup';
    case Wipedown = 'wipedown';
    case Crossfade = 'crossfade';
    case Smoothleft = 'smoothleft';
    case Smoothright = 'smoothright';
    case Smoothup = 'smoothup';
    case Smoothdown = 'smoothdown';
    case Circleopen = 'circleopen';
    case Circleclose = 'circleclose';
    case Circlecrop = 'circlecrop';
    case Rectcrop = 'rectcrop';
    case Slideleft = 'slideleft';
    case Slideright = 'slideright';
    case Slideup = 'slideup';
    case Slidedown = 'slidedown';
    case Radial = 'radial';
    case Diagtl = 'diagtl';
    case Diagtr = 'diagtr';
    case Diagbl = 'diagbl';
    case Pixelize = 'pixelize';
    case Hlslice = 'hlslice';
    case Vlslice = 'vlslice';
    case Hblur = 'hblur';
    case Distance = 'distance';
    case Squeezeh = 'squeezeh';
    case Custom = 'custom';
    case Wipetl = 'wipetl';
    case Wipetr = 'wipetr';
    case Wipebl = 'wipebl';
}
