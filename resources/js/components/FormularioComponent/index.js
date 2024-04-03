import styled, { keyframes } from "styled-components";

// Definindo a animação de fade-in
const fadeIn = keyframes`
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
`;

// Definindo a animação de fade-out
const fadeOut = keyframes`
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
`;

export const Forms = styled.form`
    width: 100%;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap; /* Permite que os itens quebrem para a próxima linha */
    border: 2px Groove black;
    border-radius: 20px;
    background-color: #f0f0f0;
`;

export const FormsContent = styled.div`
    width: 45%; /* Defina a largura dos itens do formulário */
    margin: 20px; /* Adiciona algum espaçamento entre os itens */
    display: flex;
    align-items: center;
    justify-content: center;
`;
export const FormsContent2 = styled.div`
    width: 45%; /* Defina a largura dos itens do formulário */
    margin: 20px; /* Adiciona algum espaçamento entre os itens */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
`;

export const FormsLabel = styled.label`
    width: 25%;
    padding: 5px;
    margin-bottom: 5px;
    display: block;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
`;

export const FormsInput = styled.input`
    width: 100%;
    padding: 8px;
    border: 1px solid black;
    border-radius: 3px;
`;

export const FormsButton = styled.button`
    width: 25%;
    padding: 10px;
    border-radius: 15px;
    border: 1px solid black;
    cursor: pointer;
    background-color: #397b53;
    color: white;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;

    &:hover {
        background-color: #064c21;
    }
`;

export const FormSuccess = styled.div`
    width: 370px;
    background: #0cc653;
    padding: 8px;
    font-size: 15px;
    font-weight: bold;
    border-radius: 10px;
    color: white;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
    animation: ${fadeIn} 0.5s ease-in-out, ${fadeOut} 5s ease-in-out 1s forwards; // Aplica as animações de fade-in e fade-out
`;
export const FormError = styled.div`
    width: 370px;
    background: #c60c0c;
    padding: 8px;
    font-size: 15px;
    font-weight: bold;
    border-radius: 10px;
    color: white;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
    animation: ${fadeIn} 0.5s ease-in-out, ${fadeOut} 5s ease-in-out 1s forwards; // Aplica as animações de fade-in e fade-out
`;
export const StyledSelect = styled.select`
    width: 80%;
    padding: 8px;
    border: 1px solid black;
    border-radius: 3px;
    background-color: white; /* Adicione qualquer estilo de fundo desejado */
    color: black; /* Adicione qualquer cor de texto desejada */
    font-size: 16px;
`;
export const StyledTextArea = styled.textarea`
    width: 100%;
    height: 100px; /* Ajuste a altura conforme desejado */
    padding: 8px;
    border: 1px solid black;
    border-radius: 3px;
    resize: vertical; /* Permite que o usuário redimensione verticalmente */
    font-size: 16px;
    /* Adicione qualquer estilo adicional desejado */
`;
