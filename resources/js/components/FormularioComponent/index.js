import styled from "styled-components";

export const FormContainer = styled.div`
    width: 650px;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    border: 2px solid black;
`;

export const Forms = styled.form`
    width: 80%;
    height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
`;

export const FormsContent = styled.div`
    width: 90%;
    height: 10vh;
    margin: 3%;
    display: flex;
    align-items: center;
    justify-content: center;
`;
// Definindo estilos para o label
export const FormsLabel = styled.label`
    padding: 5px;
    margin-bottom: 5px;
    display: block;
`;

// Definindo estilos para o input
export const FormsInput = styled.input`
    width: 80%;
    padding: 5px;
    border: none;
    border-radius: 3px;
    color: white;
    border: 1px solid black;
`;

export const FormsButton = styled.button`
    width: 50%;
    margin-top: 15px;
    padding: 5px;
    border-radius: 15px;
    border: 1px solid black;
`;
