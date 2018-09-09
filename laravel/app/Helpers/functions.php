<?php

/*!
 * renandiett/functions.php 1.0.2
 * https://gist.github.com/renandiett/2070a1ffb52b7bbab5da1bb5064fe5d9
 */

/**
 * Replace all non-number characters
 *
 * @param string $str
 * @return string
 */
function date_br($value, $format='d/m/Y')
{
   return date($format, strtotime($value));
}

function date_en($value, $format='Y-m-d')
{
	$value = str_replace("/", "-", $value);
	return date($format, strtotime($value));
}

function moeda_banco($str)
{
	return str_replace(',', '.', str_replace('.', '', $str));
}
function only_number($str)
{
	return preg_replace('/[^0-9]/', '', $str);
}

function clean_string($str)
{
	return str_replace(['.', ' ', '/', '-', '(', ')'],  '', $str);
}

/**
 * Get masked string to defined pattern
 *
 * @param string $val
 * @param string $mask
 * @return boolean
 *
 * Example: echo mask($cnpj,'##.###.###/####-##');
 */
function mask($val, $mask)
{
	$maskared = '';	
	$k = 0;
	for($i = 0; $i<=strlen($mask)-1; $i++)
	{
		if($mask[$i] == '#')
		{
			if(isset($val[$k]))
			$maskared .= $val[$k++];
		}
		else
		{
			if(isset($mask[$i]))
			$maskared .= $mask[$i];
		}
	}		
	return $maskared;
}

/**
 * Check if CPF is valid
 *
 * @param string $cpf
 * @return boolean
 */
function validar_cpf($cpf)
{
	$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);

	// Valida tamanho
	if (strlen($cpf) != 11)
	{
		return false;
	}

	// Previne invalidacoes
	$invalidos = [
		'00000000000',
		'11111111111',
		'22222222222',
		'33333333333',
		'44444444444',
		'55555555555',
		'66666666666',
		'77777777777',
		'88888888888',
		'99999999999'
	];
	
	if (in_array($cpf, $invalidos))
	{
		return false;
	}

	// Valida primeiro dígito verificador
	for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
	{
		$soma += $cpf{$i} * $j;
	}

	$resto = $soma % 11;
	if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
	{
		return false;
	}

	// Valida segundo dígito verificador
	for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
	{
		$soma += $cpf{$i} * $j;
	}

	$resto = $soma % 11;
	return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
}

/**
 * Check if CNPJ is valid
 *
 * @param string $cnpj
 * @return boolean
 */
function validar_cnpj($cnpj)
{
    $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

    // Valida tamanho
    if (strlen($cnpj) != 14)
    {
        return false;
    }

    // Valida primeiro dígito verificador
    for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
    {
        $soma += $cnpj{$i} * $j;
        $j = ($j == 2) ? 9 : $j - 1;
    }

    $resto = $soma % 11;
    if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
    {
        return false;
    }

    // Valida segundo dígito verificador
    for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
    {
        $soma += $cnpj{$i} * $j;
        $j = ($j == 2) ? 9 : $j - 1;
    }

    $resto = $soma % 11;
    return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
}

/**
 * Check if CEP is valid
 *
 * @param string $cep
 * @return boolean
 */
function validar_cep($cep)
{
	$cep = only_number($cep);
	return strlen($cep) == 8;
}

/**
 * Check if time is valid
 *
 * @param string $time
 * @return boolean
 */
function validar_horario($inicio, $fim)
{
	if ($inicio == null || $inicio == '00:00' || $inicio == '00:00:00') return false;
	if ($fim == null || $fim == '00:00' || $fim == '00:00:00') return false;
	if (only_number($inicio) >= only_number($fim)) return false;
	
	return preg_match('/([0-9]{2})\:([0-9]{2})(\:[0-9]{2})?/', $inicio)
		&& preg_match('/([0-9]{2})\:([0-9]{2})(\:[0-9]{2})?/', $fim);
}

/**
 * Modify a named input to nested with dots
 *
 * @param string $name
 * @return string
 */
function nested_input($name)
{
	return str_replace(['[', ']'], ['.', ''], $name);
}

/**
 * Get string after last character occurrence
 *
 * @param string $str
 * @param string $occurrence
 * @return string
 */
function last_occurrence($str, $occurrence)
{
	return substr(strrchr($str, $occurrence), 1);
}

/**
 * Set form-control prefix class in Bootstrap form elements
 *
 * @param string $name
 * @param array $attribute
 * @return array
 */
function bs_form_attr($name, array $attributes)
{
	return array_merge($attributes, ['id' => $name, 'class' => 'form-control' . (isset($attributes['class']) ? ' ' . $attributes['class'] : null)]);
}

/**
 * Check if validatiom from unique field is required or not
 *
 * @param object $obj
 * @return string
 */
function optional_validation($obj)
{
	return $obj ? ",{$obj->id}" : ',0';
}

/**
 * Get escaped paragraph string
 * 
 * @param string $value
 * @return string
 */
function safe_paragraphs($value)
{
	return new \Illuminate\Support\HtmlString(str_replace("\n", '</p><p>', strip_tags($value)));
}

/**
 * Set class=active in navigation menu item
 *
 * @param string $path
 * @return string
 */
/**
 * Set class=active in navigation menu item
 *
 * @param string|array $path
 * @return string
 */
function classActivePath($path)
{
	$path = explode('.', $path);
	$segment = 1;
	foreach($path as $p) {
		if((request()->segment($segment) == $p) == false) {
			return '';
		}
		$segment++;
	}
	return ' active menu-open';
}
