/* global wp */

import placeholderControl from './placeholderControl';
import './style.scss';

// Register control type with Customizer.
wp.customize.controlConstructor['wp-rig-placeholder'] = placeholderControl;
